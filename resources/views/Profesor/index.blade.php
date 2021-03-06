@extends('layouts.layout')
@section('content')
<!-- End of Header Area -->
<!--Start of Candidates Area-->
<div class="candidates-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center ">
                    <h2 class="uppercase">Profesores</h2>
                    <div class="separator mt-35 mb-77">
                        <span><img src="images/icons/1.png" alt=""></span>
                    </div>
                </div>
            </div>

            <form action="#" method="post" class="col-md-offset-6 justify-content-center">
                    <div class="form-container fix orange-bg mt-125">
                        <div class="box-select">
                            <label>Filtrar por nombre</label>
                            <div class="form-box col-8 fix">
                                <input type="text" id="name" name="user_name" placeholder="Introduce el nombre" required>
                            </div>
                            <!--
                            <div class="select small">
                                <select name="date">
                                    <option>Toki guztiak</option>
                                    <option>Derio</option>
                                    <option>Bilbao</option>
                                    <option>Galdakao</option>
                
                                </select>
                            </div>
                            <div class="select medium">
                                <select name="date">
                                    <option>Kategoria</option>
                                    <option>Informatika</option>
                                    <option>Kimika</option>
                                    <option>Marketing</option>
                               
                                </select>
                            </div>
                        -->
                        </div>
                    </div>
                    <!-- HASTA AQUI -->
                </form> 

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="job-post-container fix mb-70">
                    <!-- LISTA PROFESORES -->


                @foreach($profesores as $profesor) 

                    <div class="single-job-post fix">
                        <div class="job-title col-3 pl-30">
                            
                            <div class="fix pl-30 mt-29">
                                <h4 class="mb-5">{{$profesor->nombreapellidos}}</h4>
                            </div>
                        </div>
                        <div class="address col-3 pl-100">
                            <span class="mtb-30 block">{{$profesor->departamento}}</span>
                        </div>
                        <div class="keyword col-4 pl-20 pt-39">
                            <a href="#" class="button mr-10">&#9997; Editar</a>
                            <!--<a href="#" class="button mr-10">Desactivar</a>
                            <a href="#" class="button">&#x2717; Eliminar</a> -->
                        </div>
                    </div>
           
             @endforeach  
                 <!-- FIN LISTA PROFESORES -->
                         
                </div>
                <div class="text-center">
                    <a href="" class="button large-button">Añadir profesor</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Candidates Area -->
     @stop