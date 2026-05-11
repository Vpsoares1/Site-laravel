$(document).ready(function () {


    $("#btncamisa").click(function () {
        
        $(".Camisas").show();
        $(".Shorts").hide();
        $(".Calça").hide();
        $(".Moletom").hide();

        
        
    });

    $("#btnshorts").click(function () { 
        
        $(".Shorts").show();
        $(".Camisas").hide();
        $(".Calça").hide();
        $(".Moletom").hide();
        
    });

    $("#btncalça").click(function () { 
        
        $(".Calça").show();
        $(".Shorts").hide();
        $(".Camisas").hide();
        $(".Moletom").hide();

        
    });

    $("#btnmoletom").click(function () { 
        
        $(".Moletom").show();
        $(".Calça").hide();
        $(".Camisas").hide();
        $(".Shorts").hide();
        
    });

    $("#btnsemfiltro").click(function () { 
        
        $(".Moletom").show();
        $(".Calça").show();
        $(".Camisas").show();
        $(".Shorts").show();
        
    });
});