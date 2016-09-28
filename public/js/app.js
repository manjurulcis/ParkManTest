/**
 * Created by Manzurul on 9/27/2016.
 */

$(document).ready(function(){

    $('#btncountrysearch').click(function(){
        if($('#country').val()=="")	{
            alert("Put something in search field to search");
            return false;
        }
        $.ajax({
                method: "GET",
                url: siteurl+'/home/searchbycountry/?st='+$('#country').val(),

            })
            .done(function( msg ) {
                $('#result').html(JSON.stringify(msg));
            });

        return false;
    });

    $('#btngaragenamesearch').click(function(){
        if($('#garagename').val()=="")	{
            alert("Put something in search field to search");
            return false;
        }
        $.ajax({
                method: "GET",
                url: siteurl+'/home/searchbygarage/?st='+$('#garagename').val(),

            })
            .done(function( msg ) {
                $('#result').html(JSON.stringify(msg));
            });

        return false;
    });

    $('#btnownernamesearch').click(function(){
        if($('#ownername').val()=="")	{
            alert("Put something in search field to search");
            return false;
        }
        $.ajax({
                method: "GET",
                url: siteurl+'/home/searchbyowner/?st='+$('#ownername').val(),

            })
            .done(function( msg ) {
                $('#result').html(JSON.stringify(msg));
            });

        return false;
    });
    $('#btnlatlonsearch').click(function(){
        if($('#latlon').val()=="")	{
            alert("Put something in search field to search");
            return false;
        }
        $.ajax({
                method: "GET",
                url: siteurl+'/home/searchbylocation/?st='+$('#latlon').val(),

            })
            .done(function( msg ) {
                $('#result').html(JSON.stringify(msg));
            });

        return false;
    });


});
