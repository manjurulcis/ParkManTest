/**
 * Created by Manzurul on 9/27/2016.
 */

$(document).ready(function(){

    $('#btncountrysearch').click(function(){
        $.ajax({
                method: "GET",
                url: siteurl+'/home/searchbycountry/'+$('#country').val(),

            })
            .done(function( msg ) {
               $('#result').html(JSON.stringify(msg));
            });

        return false;
    });

    $('#btngaragenamesearch').click(function(){
        $.ajax({
                method: "GET",
                url: siteurl+'/home/searchbygarage/'+$('#garagename').val(),

            })
            .done(function( msg ) {
                $('#result').html(JSON.stringify(msg));
            });

        return false;
    });

    $('#btnownernamesearch').click(function(){
        $.ajax({
                method: "GET",
                url: siteurl+'/home/searchbyowner/'+$('#ownername').val(),

            })
            .done(function( msg ) {
                $('#result').html(JSON.stringify(msg));
            });

        return false;
    });
    $('#btnlatlonsearch').click(function(){
        $.ajax({
                method: "GET",
                url: siteurl+'/home/searchbylocation/'+$('#latlon').val(),

            })
            .done(function( msg ) {
                $('#result').html(JSON.stringify(msg));
            });

        return false;
    });


});
