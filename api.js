$.ajax({
       url: "http://api.local:81/",
}).done(function(data){
        console.log(data);
        $('#id').html(data.id);
        $('#date').html(data.date);
        $('#time').html(data.time);
        $('#pesan').html(data.pesan);
    
});