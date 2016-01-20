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

    $('select.userSelect').change(function(){
        var id = $(this).val();
        if(id == 1 || id == 2 ||id == 3 ){
            getGroupsOptions(id)
        }else{
            $('.groupUserDivSelect').fadeOut();
        }
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
    /**/
    /*Indicator CRUD*/
    $('body').on('click','.crearIndicator',function(e){
        e.preventDefault();
        addIndicator();
    })
    $('body').on('click','.masIndicator',function(){
        swind = false;
        $('#crearIndicator').modal();
    })

    $('body').on('click','.masIndicator2',function(){
        swind = true;
        $('#crearIndicator').modal();
    })
    $('body').on('click','.editIndicator',function(){
        var id = $(this).data('id');
        getIndicator(id)

    })
    $('body').on('click','.editarIndicator',function(e){
        e.preventDefault();
        editIndicator();
    })
    $('body').on('click','.deleteIndicator',function(e){
        var id = $(this).data('id');
        deleteIndicator(id);
    })
    /*Indicator CRUD*/
    /**/
    /*Owner CRUD*/
    $('body').on('click','.crearOwner',function(e){
        e.preventDefault();
        addOwner();
    })
    $('body').on('click','.masOwner',function(){
        swown = false;
        $('#crearOwner').modal();
    })

    $('body').on('click','.masOwner2',function(){
        swown = true;
        $('#crearOwner').modal();
    })
    $('body').on('click','.editOwner',function(){
        var id = $(this).data('id');
        getOwner(id)

    })
    $('body').on('click','.editarOwner',function(e){
        e.preventDefault();
        editOwner();
    })
    $('body').on('click','.deleteOwner',function(e){
        var id = $(this).data('id');
        deleteOwner(id);
    })
    /*Owner CRUD*/
    /**/
    /*Requester CRUD*/
    $('body').on('click','.crearRequester',function(e){
        e.preventDefault();
        addRequester();
    })
    $('body').on('click','.masRequester',function(){
        swreq = false;
        $('#crearRequester').modal();
    })

    $('body').on('click','.masRequester2',function(){
        swreq = true;
        $('#crearRequester').modal();
    })
    $('body').on('click','.editRequester',function(){
        var id = $(this).data('id');
        getRequester(id)

    })
    $('body').on('click','.editarRequester',function(e){
        e.preventDefault();
        editRequester();
    })
    $('body').on('click','.deleteRequester',function(e){
        var id = $(this).data('id');
        deleteRequester(id);
    })
    /*Requester CRUD*/
    /**/
    /*Site CRUD*/
    $('body').on('click','.crearSite',function(e){
        e.preventDefault();
        addSite();
    })
    $('body').on('click','.masSite',function(){
        swsite = false;
        getOwnerOptions(swsite);
        $('#crearSite').modal();
    })

    $('body').on('click','.masSite2',function(){
        swsite = true;
        getOwnerOptions(swsite);
        $('#crearSite').modal();
    })
    $('body').on('click','.editSite',function(){
        var id = $(this).data('id');
        getSite(id)

    })
    $('body').on('click','.editarSite',function(e){
        e.preventDefault();
        editSite();
    })
    $('body').on('click','.deleteSite',function(e){
        var id = $(this).data('id');
        deleteSite(id);
    })
    $('.buscarUsuario').click(function(e){
        e.preventDefault();
        var name = $('.busquedaInput').val();
        location.href="/admin/users/letterSeach/"+name;


    })
    /*Site CRUD*/

})