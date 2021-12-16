<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=utf8_encode($nomeCondominio)?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        :root{
            --vm: #F00;
            --az: rgb(0, 98, 255);
            --br: #FFF;
        }

        .html,body{ overflow-x: hidden; }
        .vm{ color: var(--vm); }
        .table{}
        .table th:first-child,
        .table td:first-child{ width: 20%; }
        .table th:last-child,
        .table td:last-child{ width: 25%; }
        .material-icons-outlined{ cursor: pointer; }
        .edit{ color: var(--az); text-decoration: underline; cursor: pointer; }
        #camera{ width: 150px; height: 113px; border: 1px solid var(--az); border-radius: 10px; }
        #myCanvas{ width: 200px; height: 150px; display: none; }
        .warn{ color: var(--vm); font-size: 12px; text-align: center; padding-top: 3px; }
        .pic{ display: none; }
        .pic img{ width: 150px; height: 113px; border-radius: 10px; }
        .reloadCoord{ padding-bottom: 0; color: var(--br); padding-left: 1px; }
        .card-header h5{ color: var(--br); }
    </style>
    <script>
        const $a = jQuery.noConflict();
        var canvas;
        var ctx;
        var video;
        var webcamStream;
        let rel = false;

        $a(document).ready(function(){
            video = document.querySelector('#camera');
            video
            canvas = document.querySelector("#myCanvas");
            ctx = canvas.getContext('2d');
            startCam();
            getLocation(false);

            $a(".addGeo").click(saveCoords);
            $a("#cancelGeo").click(getLocation);
            $a(".capture").click(snapshot);
            $a(".actualPic").click(actualPic);
            $a(".reloadCoord").click(function(){
                getLocation(true);
            });
        });

        function actualPic(){
            if(!$a("#foto").val()){
                $a(".warn").text("Não há foto capturada!");
                setTimeout(function(){
                    $a(".warn").text("");
                },2000);
                goBack();
                return;
            }

            $a(".pic").html("");
            $a(".pic").show();
            $a(".camera").hide();
            $a(".capture").hide();
            $a(".pic").html("<img src='"+$a("#foto").val()+"'>");
            $a(".actualPic").html("Voltar Câmera");
            $a(".actualPic").unbind("click");
            $a(".actualPic").click(goBack);
        }

        function goBack(){
            $a(".pic").html("");
            $a(".pic").hide();
            $a(".actualPic").html("Foto Atual");
            $a(".camera").show();
            $a(".capture").show();
            $a(".actualPic").unbind("click");
            $a(".actualPic").click(actualPic);
        }

        function snapshot() {
            ctx.drawImage(video, 0,0, canvas.width, canvas.height);
            canvas = document.querySelector("#myCanvas");
            var base64 = canvas.toDataURL();
            $a("#foto").val(base64);
            $a(".warn").text("Foto capturada!");
            actualPic();
            setTimeout(function(){
                $a(".warn").text("");
            },2000);
        };

        function startCam(){
            navigator.getUserMedia = ( 
                navigator.getUserMedia ||
                navigator.webkitGetUserMedia ||
                navigator.mozGetUserMedia ||
                navigator.msGetUserMedia
            );

            if (navigator.getUserMedia) {
                navigator.getUserMedia(
                    {
                        video: {
                            facingMode: {
                                exact: 'environment'
                            }
                        },
                        audio: false
                    },
                    function(localMediaStream) {
                        video.srcObject = localMediaStream;
                        webcamStream = localMediaStream;
                    },
                    function(err) {
                        console.error("Erro encontrado: " + err);
                    }
                );
            }else{
                console.error("Suporte à câmera não suportado!");
            }
        }

        function getLocation(reload){
            if(reload)
                rel = true;
            if(navigator.geolocation)
                navigator.geolocation.getCurrentPosition(showPosition);
            else
                console.error("Geolocalização não suportada!");

            $a("#title").text("Nova Referência");
            $a("#nome").val("");
            $a("#id").val("");
            $a("#foto").val("");
            $a(".editRow").addClass("d-none");
            $a(".new").removeClass("d-none");
        }

        function showPosition(position) {
            $a("#lat").val(position.coords.latitude);
            $a("#lon").val(position.coords.longitude);

            if(rel){
                rel = false;
                goBack();
                return;
            }

            const url = "../getAllCoord.php?id=&idCondominio=<?=$idCondominio?>";
            $a.getJSON(url,function(json){
                $a("#registros tbody").html("");
                for(let i=0;i<json.length;i++){
                    let j = i+1;
                    let html = '';
                    html += '<tr id="'+json[i].id+'">';
                    html += '    <th scope="row" class="text-center">'+j+'</th>';
                    html += '    <td class="edit">'+json[i].nome+'</td>';
                    html += '   <td class="text-center">';
                    html += '      <span class="material-icons-outlined vm delete">delete</span>';
                    html += '   </td>';
                    html += ' </tr>';

                    $a("#registros tbody").append(html);
                }

                $a(".edit").unbind("click");
                $a(".delete").unbind("click");
                $a(".edit").click(editRow);
                $a(".delete").click(deleteRow);
                goBack();
            });
        }

        function editRow(){
            const id = $a(this).closest("tr").attr("id");
            const url = "../getAllCoord.php?id="+id+"&idCondominio=<?=$idCondominio?>";
            $a.getJSON(url,function(json){
                $a(".editRow").removeClass("d-none");
                $a(".new").addClass("d-none");
                $a("#title").text("Alterar Referência");
                $a("#lat").val(json[0].latitude);
                $a("#lon").val(json[0].longitude);
                $a("#nome").val(json[0].nome);
                $a("#id").val(json[0].id);
                $a("#foto").val(json[0].foto);
                actualPic();
            });
        }       

        function deleteRow(){
            const id = $a(this).closest("tr").attr("id");
            if(confirm("Confirma a remoção deste registro?")){
                const url = "../removeCoord.php?id="+id;
                $a.getJSON(url,function(){
                    getLocation();
                    goBack();
                });
            }
        }

        function saveCoords(){
            const name = $a("#nome").val();
            const latitude = $a("#lat").val();
            const longitude = $a("#lon").val();
            const foto = $a("#foto").val();
            const id = $a("#id").val();
            if(!name){
                alert("Preencha um nome");
                return;
            }

            const url = "../addCoord.php";
            const geo = {
                nome: name,
                latitude: latitude,
                longitude: longitude,
                foto: foto, 
                id: id,
                idCondominio: "<?=$idCondominio?>"
            }

            $a.ajax({
                type: "POST",
                url: url,
                data: geo
            }).done(function(){
                getLocation();
            });
        }
    </script>
</head>
<body>
    <div class="content">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card">
                    <div class="card-header bg-primary">
                      <h5>Cond. <?=utf8_encode($nomeCondominio)?></h5>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h5 id="title">Nova Referência</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-5">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Latitude</label>
                                                <input type="text" id="lat" class="form-control" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <label>&nbsp;</label>
                                            <button type="button" class="reloadCoord btn btn-secondary form-control">
                                                <span class="material-icons-outlined">gps_fixed </span>
                                            </button>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label>Longitude</label>
                                                <input type="text" id="lon" class="form-control" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" id="nome" class="form-control">
                                                <input type="hidden" id="id">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <div class="camera">
                                                <video id="camera" controls autoplay></video>
                                                <canvas id="myCanvas"></canvas>  
                                            </div>
                                            <div class="pic"></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <button type="button" class="capture mt-2 btn btn-secondary form-control">Capturar Foto</button>
                                                <button type="button" class="actualPic mt-2 btn btn-light form-control">Foto Atual</button>
                                                <div class="warn"></div>
                                                <input type="hidden" id="foto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 new">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="button" class="addGeo btn btn-success form-control">Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 editRow d-none">
                                        <div class="col-6">
                                            <button type="button" class="addGeo btn btn-success form-control">Alterar</button>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" id="cancelGeo" class="btn btn-secondary form-control">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header bg-info">
                                <h5 class="text-center">Registros Salvos</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="registros" class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col" class="text-center">#</th>
                                                <th scope="col">Nome da Coordenada</th>
                                                <th scope="col" class="text-center">Remover</th>
                                              </tr>
                                            </thead>
                                            <tbody></tbody>
                                          </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>