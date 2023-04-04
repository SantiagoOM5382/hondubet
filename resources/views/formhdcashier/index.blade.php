@extends('layouts.footer')
@extends('layouts.head')
@section('content')


    <body class="cashierbodyone bd-example-row-flex-cols">
        <div class="container">
          
            <!-- imagen de titulo  -->
            <div class="row justify-content-center title">
                <div class= "col-xs-12 text-center">
                    <a><img src="{{ asset('../images/logo.webp') }}" width="250" height="50" alt=""></a>
                </div>      
            </div>
            </br>
            </br>
            </br>
      
            <!--  div para centrar todo  -->
            <div class="row align-items-center  ">

                <!-- formulario centrado  -->
                <div class="col-md-12 col-lg-12 col-sm-12 styled-table-td">
                    <form method="POST" id="hdcashierform" action="{{ url ('/hdcashier')}}" >
                        
                        <div class="form-group heigth">
                            <label for="name" class="control-label ">{{'NOMBRE'}}</label>
                            <input type="text" class="form-control redondos" name="name" id="name" value="{{isset ($formhdcashier->name)?$formhdcashier->name:old('name')}}">
                        </div>

                        <div class="form-group heigth">
                            <label for="last_name" class="control-label">{{'APELLIDOS'}}</label>
                            <input type="text" class="form-control redondos" name="last_name" id="last_name" value="{{isset ($formhdcashier->last_name)?$formhdcashier->last_name:old('last_name')}}">
                        </div>
            
                        <div class="form-group heigth">
                            <label for="email" class="control-label">{{'CORREO ELECTRÓNICO'}}</label>
                            <input type="text" class="form-control redondos" name="email" id="email" value="{{isset ($formhdcashier->email)?$formhdcashier->email:old('email')}}">
                        </div>

                        <div class="form-group heigth">
                            <label for="phone"  class="control-label">{{'TELÉFONO'}}</label>
                            <input type="text"  class="redondos input-number form-control" required name="phone" id="phone" value=" {{isset ($formhdcashier->phone)?$formhdcashier->phone:old('phone')}}">
                        </div>

                        <div class="form-group heigth">
                            <label for="city"  class="control-label">{{'CIUDAD'}}</label>
                            <input type="text"  class="form-control redondos" name="city" id="city" value=" {{isset ($formhdcashier->city)?$formhdcashier->telefono:old('city')}}">
                        </div>

                        <div class="text-center">
                            <label class="form-check-label  " for="theyre_new">¿Eres nuevo en el mundo de los pronosticos?</label></br>
                            <label>
                                <input type="checkbox" class="form-control" hidden name="yes" id="theyre_new" value="si"/>
                                <img class="checkeablex" src="{{ asset('../images/hdform/si.webp') }}" width="50" height="35"/>
                            </label>
                            <label>
                                <input type="checkbox" class="form-control" hidden name="no" id="theyre_new" value="no"/>
                                <img class="checkeablex" src="{{ asset('../images/hdform/no.webp') }}" width="50" height="35" />
                            </label>
                            <div></div>                               
                        </div>              

                        </br>
                        <!-- Boton Enviar -->
                        <div class="form-group heigth">
                            <button class="btn btn-light redondos " type="button" id="btnenv" >Enviar</button>
                        </div>
                    
                    </form>
                </div>

                <!-- popup del mensaje cuando se envia form -->
                <div  hidden id="popup"></div>
            </div>
        </div>
        @section('footer')

    <script src="{{ asset('js/formhdcashier.js') }}"></script>
    <script>
            $(document).ready(function (){
                $('.input-number').keyup(function (){
                    this.value = (this.value + '').replace(/[^0-9]/g, '');
                });
            });
    </script>

@endsection
