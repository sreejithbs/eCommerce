
$(document).ready(function(){

    //get base URL *********************
    var url = $('#url').val();


    //display modal form for creating new product *********************
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#catForm').trigger("reset");
        $('#categoryModal').modal('show');
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var category_id = $(this).val();
       
        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + category_id,
            success: function (data) {
                console.log(data);
                $('#category_id').val(data.id);
                $('#name').val(data.name);
                $('#description').val(data.description);
                $('#btn-save').val("update");
                $('#categoryModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });



    //create new product / update existing product ***************************
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 
        var formData = {
            name: $('#name').val(),
            description: $('#description').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var category_id = $('#category_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + category_id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

                window.location.reload();
                
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });


    //delete product and remove it from TABLE list ***************************
    $(document).on('click','.delete-category',function(){
        var category_id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + category_id,
            success: function (data) {
                console.log(data);
                window.location.reload();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    
});