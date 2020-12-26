
$(document).ready(function () {

    //取得所有留言
    function getMessages() {
        return new Promise((resolve) => {
            $.ajax({
                method: 'GET',
                url: 'http://127.0.0.1/ci4composer/project-root/public/index.php/ControllerApi',
                dataType: 'json',
                success: (response) => {
                    console.log(response);
                    resolve(response);
                }
            });
        })
    }
    getMessages().then((messages) => {
        messages.forEach((message) => {
            $('thead').append(`
                <tr>
                    <td>${message.author}</td>
                    <td>${message.liuyan}</td>
                    <td>${message.time}</td>
                    <td width="100px">
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal" data-whatever="${message.liuyan}" data-what="${message.id}">修改</button>
                        <button type="button" class="btn btn-outline-light" data-id="${message.id}" id="deleteid">刪除</button>
                    </td>
                </tr>
            `)
        });
    })
    $("#create1").on("click", function () {
        addMessage();
    });
    $(document).on('click', '#deleteid', function () {
        deleteMessage();
    });

    //新增留言
    function addMessage() {
        let name = $("input[name='input-user']").val();
        let content = $("textarea[name='input-content']").val();
        $.ajax({
            type: 'POST',
            url: 'http://127.0.0.1/ci4composer/project-root/public/index.php/ControllerApi/create',
            data: {
                'name': name,
                'content': content,
            },
            success: function (response) {
                console.log(response);
                $.each(response, function (key, val) {
                    alert(val);
                    //Swal.fire(val);
                });
                $('thead').append(`
                    <tr>
                        <td>${message.author}</td>
                        <td>${message.liuyan}</td>
                        <td>${message.time}</td>
                        <td width="100px">
                            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal" data-whatever="${message.liuyan}" data-what="${message.id}">修改</button>
                            <button type="button" class="btn btn-outline-light" data-id="${message.id}" id="deleteid">刪除</button>
                        </td>
                    </tr>
                `);
            },
            error: function (response) {
                console.log(response);
            },
        });
    };
    //刪除留言
    function deleteMessage() {
        let id = $(this).attr('data-id');
        $.ajax({
            type: 'POST',
            url: 'http://127.0.0.1/ci4composer/project-root/public/index.php/ControllerApi/remove/' + id,
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function (response) {
                console.log(response);
                $.each(response, function (key, val) {
                    alert(val);
                    //Swal.fire(val);
                });
                window.location = "http://127.0.0.1/ci4composer/project-root/public/";
            },
            error: function (params) {
                console.log(params);
            }
        })
    }
    //修改留言
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var id = button.data('what');
        console.log("first" + recipient + "  " + id);
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('修改留言 ');
        modal.find('.modal-body input').val(recipient);

        $('#editcheck').on("click", function () {
            let changemessage = $("#recipient-name").val();
            console.log("有" + changemessage);
            $.ajax({
                type: 'POST',
                url: 'http://127.0.0.1/ci4composer/project-root/public/index.php/ControllerApi/edit',
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                data: {
                    'id': id,
                    'changemessage': changemessage,
                },
                success: function (response) {
                    console.log("second" + response);
                    $('#exampleModal').modal('hide');
                    $.each(response, function (key, val) {
                        alert(val);
                        //Swal.fire(val);
                    });
                    window.location = "http://127.0.0.1/ci4composer/project-root/public/"
                },
                error: function (response) {
                    console.log(response);
                }
            })
        })
    })

});