var app = angular.module("myapp", []);
app.service("contprice", function () {

});
app.controller("pricectrl", function ($scope) {




    var price = document.getElementsByClassName("price");

    var arr = [];
    for (var x = 0; x < price.length; x++) {
        var prezzi = Number(price[x].innerHTML.replace('€', ''));
        prezzi = Math.floor(prezzi * 100) / 100;
        var giochi = { "prezzo": prezzi, "stat_select": true };
        arr.push(giochi);
    };

    var tol = 0;



    var stat_btn = document.getElementsByClassName("btn-outline-success");


    for (var i = 0; i < stat_btn.length; i++) {
        var button = stat_btn[i];

       button.addEventListener('click', change(i))
        
       
        tol += arr[i].prezzo;
}
       
       
function change(x){
    if (arr[x].stat_select === true) {
        arr[x].stat_select = false;
    }
    else {
        arr[x].stat_select = true;
    }
    console.log(arr);
}


        
    
    
    /* $scope.statselect = function () {
       if (stat === true) {
           stat = false;
       }
       else if (stat === false) {
           stat = true;
       }
   }  */

    /*item.stat_select=stat;
   if(item.stat_select==false){
       item.prezzo=0;
   }
   else if(item.stat_select==true){
       item.prezzo;
   } */
    

    $scope.total = tol;
});
