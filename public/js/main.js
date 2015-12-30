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
})