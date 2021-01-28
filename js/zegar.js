var z = setInterval(z1,1000);
function z1(){
var data= new Date();
var godzina = data.getHours();
var minuta = data.getMinutes();
godzina=(godzina<10 ? "0":"")+godzina;
minuta=(minuta<10 ? "0":"")+minuta;
var data=godzina+":"+minuta;
$("#godzina").html(data);
};
