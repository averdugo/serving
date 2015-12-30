$(document).ready(function(){
    /*USER CRUD*/
    $('body').on('click','.crearUsuario',function(e){
        e.preventDefault();
        addUser();
    })
    $('body').on('click','.masUser',function(){
        swuser = false;
        $('#crearUsuario').modal();
    })

    $('body').on('click','.masUser2',function(){
        swuser = true;
        $('#crearUsuario').modal();
    })
    $('body').on('click','.editUser',function(){
        var id = $(this).data('id');
        getUser(id)

    })
    $('body').on('click','.editarUsuario',function(e){
        e.preventDefault();
        editUser();
    })
    $('body').on('click','.deleteUser',function(e){
        var id = $(this).data('id');
        deleteUser(id);
    })
    /*USER CRUD*/
    /**/
    /*Allowances CRUD*/
    $('body').on('click','.crearAllowance',function(e){
        e.preventDefault();
        addAllowance();
    })
    $('body').on('click','.masAllowance',function(){
        swallo = false;
        $('#crearAllowance').modal();
    })

    $('body').on('click','.masAllowance2',function(){
        swallo = true;
        $('#crearAllowance').modal();
    })
    $('body').on('click','.editAllowance',function(){
        var id = $(this).data('id');
        getAllowance(id)

    })
    $('body').on('click','.editarAllowance',function(e){
        e.preventDefault();
        editAllowance();
    })
    $('body').on('click','.deleteAllowance',function(e){
        var id = $(this).data('id');
        deleteAllowance(id);
    })
    /*Allowances CRUD*/
    /**/
    /*Cars CRUD*/
    $('body').on('click','.crearCar',function(e){
        e.preventDefault();
        addCar();
    })
    $('body').on('click','.masCar',function(){
        swcar = false;
        $('#crearCar').modal();
    })

    $('body').on('click','.masCar2',function(){
        swcar = true;
        $('#crearCar').modal();
    })
    $('body').on('click','.editCar',function(){
        var id = $(this).data('id');
        getCar(id)

    })
    $('body').on('click','.editarCar',function(e){
        e.preventDefault();
        editCar();
    })
    $('body').on('click','.deleteCar',function(e){
        var id = $(this).data('id');
        deleteCar(id);
    })
    /*Cars CRUD*/
    /**/
    /*Group CRUD*/
    $('body').on('click','.crearGroup',function(e){
        e.preventDefault();
        addGroup();
    })
    $('body').on('click','.masGroup',function(){
        swcar = false;
        $('#crearGroup').modal();
    })

    $('body').on('click','.masGroup2',function(){
        swcar = true;
        $('#crearGroup').modal();
    })
    $('body').on('click','.editGroup',function(){
        var id = $(this).data('id');
        getGroup(id)

    })
    $('body').on('click','.editarGroup',function(e){
        e.preventDefault();
        editGroup();
    })
    $('body').on('click','.deleteGroup',function(e){
        var id = $(this).data('id');
        deleteGroup(id);
    })
    /*Group CRUD*/
})