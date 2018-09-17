<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CATÁLOGO DE SERVICIOS</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
 
  <!-- laravel csr -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom CSS -->
    <link href="{{asset('css/stylish-portfolio.min.css')}}" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">Fiemec</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#">Services</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact">Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Footer -->
    <!-- Portfolio -->

    {!!Form::open(array('url'=>'objetivos_empresariales/ob','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}

    {{Form::token()}}
    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
        

        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-6 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-smartphone"></i>
            </span>
            <h4>
              <strong>Objetivo Emppresarial</strong>
            </h4>
            <select name="ide" id="ide" class="form-control selectpicker" data-live-search="true">
                <option value="">Seleccione..</option>
                @foreach($objetivo as $ob)
                    <option value="{{$ob->ide}}_{{$ob->objetivo}}">{{$ob->objetivo}}</option>
                @endforeach
            </select>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-like"></i>
            </span>
            <h4>
              <strong>Metas</strong>
            </h4>
              <div id="metasss"></div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-pencil"></i>
            </span>
            <h4>
              <strong>Palabras</strong>
            </h4>
            <select name="palabras" id="palabras" class="form-control selectpicker" data-live-search="true">
              <option value="">Seleccione..</option>
              @foreach($palabra as $p)
                  <option value="{{$p->idp}}_{{$p->pu}}">{{$p->pu}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-pencil"></i>
            </span>
            <h4>
              <strong>Entrega de Valor</strong>
            </h4>
            <select name="entrega" id="entrega" class="form-control selectpicker" data-live-search="true">
              <option value="">Seleccione..</option>
              @foreach($entrega as $e)
                  <option value="{{$e->id_ev}}_{{$e->entrega_valor}}">{{$e->entrega_valor}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-lg-4 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-mustache"></i>
            </span>
            <h4>  
              <strong>Servicios</strong>
            </h4>
            <select name="serv" id="serv" class="form-control selectpicker" data-live-search="true">
            <option value="">Seleccione..</option>
              @foreach($sistema as $s)
                  <option value="{{$s->ids}}_{{$s->servicio}}">{{$s->servicio}}</option>
              @endforeach
            </select>    
          </div>
          <div class="col-lg-4 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-mustache"></i>
            </span>
            <h4>  
              <strong>Recursos</strong>
            </h4>
            <select name="recu" id="recu" class="form-control selectpicker" data-live-search="true">
              <option value="">Seleccione..</option>
              @foreach($recursos as $r)
                  <option value="{{$r->idRecurso}}_{{$r->recurso}}">{{$r->recurso}}</option>
              @endforeach
            </select>    
          </div>
          <div class="mt-4 mb-5">
            <button type="button" class="ml-5 btn btn-success" id="agregar">Agregar</button>
          </div>

        </div>

        <div>
          <table id="Meta_Principal" class="table table-striped table-bordered table-condensed table-hover">
              <thead style="background-color:#A9D0F5">
                  <th>Obetivo</th>
                  <th>metas</th>
                  <th>Palabras</th>
                  <th>Entrega de Valor</th>
                  <th>Servicios</th>
                  <th>Recursos</th>
              </thead>
              <tbody id="detalle">
              </tbody>
          </table>
        </div>
        <div>
        <button type="button" class="btn btn-success" id="guardar">Guardar</button>
        </div>
      </div>
    </section>
    {!!Form::close()!!}
    <script>
      $(document).ready(function(){
        $('#agregar').click(function(){
          metastable();
        });
      });

      $(document).ready(function(){
        $('#guardar').click(function(){
          Guardar();
        });
      });

      var idObjEmpr;
      var tablas=[];
      $("#ide").change(obejEmp);
      function obejEmp(){
        idObjEmpr=document.getElementById('ide').value;
        metas();

      }
      function Guardar(){
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          type: "POST",
            url: 'guardar',
            data: {datos: tablas},
            dataType: "json",
            success: function( data ) {
                    
            }
        });
      }
      function metastable(){
        var obe=document.getElementById('ide').value.split('_');
        var obe1=obe[0];
        var obe2=obe[1];
        var met=document.getElementById('meta').value.split('_');
        var met1=met[0];
        var met2=met[1];
        var pala=document.getElementById('palabras').value.split('_');
        var pala1=pala[0];
        var pala2=pala[1];
        var ser=document.getElementById('serv').value.split('_');
        var ser1=ser[0];
        var ser2=ser[1];
        var rec=document.getElementById('recu').value.split('_');
        var rec1=rec[0];
        var rec2=rec[1];
        var entre=document.getElementById('entrega').value.split('_');
        var entre1=entre[0];
        var entre2=entre[1];
        console.log(obe,met,pala,ser);
        var fil='<tr>'+
          '<td>'+
            '<label for="" name="objem" id="objem" value="">'+obe[1]+'</label>'+
          '</td>'+
          '<td>'+
            '<label for="" name="metas" id="metas" value="">'+met[1]+'</label>'+
          '</td>'+
          '<td>'+
            '<label for="" name="palabras" id="palabras" value="">'+pala[1]+'</label>'+
          '</td>'+
          '<td>'+
            '<label for="" name="entre" id="entre" value="">'+entre[1]+'</label>'+
          '</td>'+
          '<td>'+
            '<label for="" name="sevicios" id="sevicios" value="">'+ser[1]+'</label>'+
          '</td>'+
          '<td>'+
            '<label for="" name="recursos" id="recursos" value="">'+rec[1]+'</label>'+
          '</td>'+
        '</tr>';
        console.log("asdad");
        var dat={obe1:obe1,met1:met1,pala1:pala1,ser1:ser1,rec1:rec1,entre1:entre1};
        tablas.push(dat);
        $("#detalle").append(fil); 
      }
      function metas(){
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          type: "POST",
            url: 'meta',
            data: {idObjEmpre: idObjEmpr},
            dataType: "json",
            success: function( data ) {
                // '<select name="meta" id="meta" class="form-control selectpicker">'
                var meta=data.msg;
                var va;
                for(const i in meta){
                  va+='<option value="'+meta[i]['id_m']+'_'+meta[i]['metas_empresariales']+'">'+meta[i]['metas_empresariales']+'</option>'
                }
                console.log(data.msg);
                var dat='<select name="meta" id="meta" class="form-control selectpicker">'+
                '<option value="">Seleccione..</option>'+
                    va+
                    '</select>';  
                $("#metasss").html(dat); 
            }
        });
      }

      // tipoCambio=document.getElementById('idTipo_moneda').value.split('_');

    </script>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset("vendor/jquery-easing/jquery.easing.min.js")}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset("js/stylish-portfolio.min.js")}}"></script>

  </body>

</html>
