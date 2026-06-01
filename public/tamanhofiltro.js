$(document).ready(function () {


    $("#btncamisap").click(function () {
        
        $(".camisap").show();
        $(".camisam").hide();
        $(".camisag").hide();
        $(".camisagg").hide();

        
        
    });

    $("#btncamisam").click(function () { 
        
        $(".camisam").show();
        $(".camisap").hide();
        $(".camisag").hide();
        $(".camisagg").hide();
        
    });

    $("#btncamisag").click(function () { 
        
        $(".camisag").show();
        $(".camisagg").hide();
        $(".camisam").hide();
        $(".camisap").hide();

        
    });

    $("#btncamisagg").click(function () { 
        
        $(".camisagg").show();
        $(".camisag").hide();
        $(".camisam").hide();
        $(".camisap").hide();
        
    });

    $("#btncamisatudo").click(function () { 
        
        $(".camisagg").show();
        $(".camisag").show();
        $(".camisam").show();
        $(".camisap").show();
        
    });

});