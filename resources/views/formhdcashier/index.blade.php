@extends('layouts.footer')
@extends('layouts.head')
@section('content')


    <body class="cashierbodyone bd-example-row-flex-cols">
        <div class="container">
          
            <!-- imagen de titulo  -->
            </br>
            <div class="row justify-content-center title paddingtwo">
                <div class= "col-xs-12 text-center">
                    <a><img src="{{ asset('../images/logo.webp') }}" width="250" height="50" alt=""></a>
                </div>      
            </div>
            </br>
            </br>
            </br>

            <div class="container">
                <div class="row align-items-center text-center">
                    
                <div class="d-block d-sm-none col-sm-12 paddingtre">
                        <img class="" src="{{ asset('../images/hdform/pointshop.webp') }}" width="500" height="150"></br>
                    </div>    
                    <div class="d-block d-sm-none col-sm-12 ">
                        <img class="" src="{{ asset('../images/hdform/genera.png') }}" width="500" height="150"></br>
                    </div>  
                    <div class="d-block d-sm-none col-sm-12 paddingtre">
                        <img class="img-fluid" src="{{ asset('../images/hdform/manwithcel.webp') }}" width="800" height="800"></br>
                    </div>    
                    
                </div>
            </div>
      
            <!--  div para centrar todo  -->
            <div class="row align-items-center ">

                <!-- formulario centrado  -->
                <div class="col-md-6 col-lg-6 col-sm-12 ">
                    
                    <div class="row align-items-center ">
                        <div class= "col-md-6 col-lg-6 d-none d-md-block d-lg-none 	d-none d-lg-block d-xl-none d-none d-xl-block d-xxl-none ">
                            <a><img src="{{ asset('../images/hdform/pointshop.webp') }}" class="align-items-center text-center padding" width="560" height="120"></a>
                        </div>      
                    </div>

                    <form method="POST" class=" row gx-2 gy-2 styled-table-td " id="hdcashierform" action="{{ url ('/hdcashier')}}" >
                        
                        <div class="form-group heigth col-md-6 col-12">
                            <label for="name" class="control-label letter">{{'NOMBRE'}}</label>
                            <input type="text" class="form-control redondos" name="name" id="name" value="{{isset ($formhdcashier->name)?$formhdcashier->name:old('name')}}">
                        </div>

                        <div class="form-group heigth col-md-6 col-12">
                            <label for="phone"  class="control-label letter">{{'TELÉFONO CELULAR'}}</label>
                            <input type="text"  class="redondos input-number form-control" required name="phone" id="phone" value=" {{isset ($formhdcashier->phone)?$formhdcashier->phone:old('phone')}}">
                        </div>

                        <div class="form-group heigth col-md-6 col-12">
                            <label for="last_name" class="control-label letter">{{'APELLIDOS'}}</label>
                            <input type="text" class="form-control redondos" name="last_name" id="last_name" value="{{isset ($formhdcashier->last_name)?$formhdcashier->last_name:old('last_name')}}">
                        </div>

                        <div class="form-group heigth col-md-6 col-12">
                            <label for="city"  class="control-label letter">{{'NEGOCIO'}}</label>
                            <input type="text"  class="form-control redondos">
                        </div>
            
                        <div class="form-group heigth col-md-6 col-12">
                            <label for="email" class="control-label letter">{{'CORREO ELECTRÓNICO'}}</label>
                            <input type="text" class="form-control redondos" name="email" id="email" value="{{isset ($formhdcashier->email)?$formhdcashier->email:old('email')}}">
                        </div>

                        <div class="form-group heigth col-md-6 col-12">
                            <label for="city"  class="control-label letter">{{'CIUDAD'}}</label>
                            <input type="text"  class="form-control redondos" name="city" id="city" value=" {{isset ($formhdcashier->city)?$formhdcashier->telefono:old('city')}}">
                        </div>

                        

                        <div class="text-center col-12">
                            <label class="form-check-label letter  " for="theyre_new">¿Eres nuevo en el mundo de las apuestas deportivas?</label></br>
                            <label>
                                <input type="checkbox" class="form-control" hidden name="yes" id="theyre_new" value="si"/>
                                <img class="checkeablex yesno" src="{{ asset('../images/hdform/si.webp') }}" width="45" height="25"/>
                            </label>
                            <label>
                                <input type="checkbox" class="form-control" hidden name="no" id="theyre_new" value="no"/>
                                <img class="checkeablex yesno" src="{{ asset('../images/hdform/no.webp') }}" width="45" height="25" />
                            </label>
                            <div></div>                               
                        </div>              

                        </br>
                        <!-- Boton Enviar -->
                        <div class="form-group heigth text-center padding col-12">
                            <button class="btn btn-light btncssenv" type="button" id="btnenv" >ENVIAR</button>
                        </div>
                    
                    </form>
                </div>
                <!-- popup del mensaje cuando se envia form -->
                <div  hidden id="popup"></div>

                <div class="col-md-6 col-lg-6 d-none d-sm-block text-center">
                    <a><img src="{{ asset('../images/hdform/menceldesk.webp') }}" class="" width="700" height="500"></a>
                </div>

                
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center text-center">

            <div class="col-md-4 col-lg-4 col-sm-12 padding">
                <img class="img-fluid" src="{{ asset('../images/hdform/1a.webp') }}" width="300" height="400">
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12 padding">
                <img class="img-fluid" src="{{ asset('../images/hdform/2a.webp') }}" width="300" height="400">
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12 padding">
                <img class="img-fluid" src="{{ asset('../images/hdform/3a.webp') }}" width="300" height="400">
            </div>
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
