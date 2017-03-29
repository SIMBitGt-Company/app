$(document).ready(

    function()
    {

//MENU SERVICE ORDERS
    $("#NewOrder").click(function(){

        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').show();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
        
    });

    $("#SearchOrder").click(function(){

        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').show();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
        
    });

    $("#HistoryOrder").click(function(){

        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').show();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
        
    });

//MENU CUSTOMERS
    $("#NewUser").click(function(){

        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').show();
        $('#DivSearchUser').hide();
        
    });

    $("#SearchUser").click(function(){

        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').show();
        
    });

    $("#OrderUser").click(function(){

        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').show();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
        
    });

//MENU VEHICLES
    $("#NewCar").click(function(){
        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').show();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
    });

    $("#SearchCar").click(function(){
        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').show();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
    });

    $("#OrderCar").click(function(){
        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').show();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
    });

        $("#NewBrand").click(function(){
        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').show();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
    });

//MENU ACCESORIES

    $("#NewAccesorie").click(function(){
        //forms accesories
        $('#DivRegAccesorie').show();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
    });

    $("#SearchAccesorie").click(function(){
        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').show();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
    });

//MENU SERVICES
    $("#NewService").click(function(){
        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').show();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
    });

    $("#SearchService").click(function(){
        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').show();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').hide();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
    });


//MENU HISTORIAL

    $("#ShowMyOrders").click(function(){
        //forms accesories
        $('#DivRegAccesorie').hide();
        $('#DivSearchAccesorie').hide();

        //forms cars
        $('#DivOrderCar').hide();
        $('#DivRegCar').hide();
        $('#DivRegBrand').hide();
        $('#DivSearchCar').hide();

        //forms items
        $('#DivRegItem').hide();
        $('#DivSearchItem').hide();

        //forms orders
        $('#DivRegOrder').hide();
        $('#DivSearchOrder').hide();
        $('#DivShowOrder').hide();

        //forms show
        $('#DivMyOrders').show();

        //forms users
        $('#DivOrderUser').hide();
        $('#DivRegUsuario').hide();
        $('#DivSearchUser').hide();
    });  

});