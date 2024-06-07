$(document).ready(function () {
    showNotifications();
    setInterval(showNotifications, 5000);

    $('#notifications').hide();

    $('#nf-btn').click(function(){
        $('#notifications').toggle();
        seenNotification();
    });

    $('#nf-btn').click(function(e){
        e.stopPropagation();
    })

    $('html').click(function(){
        $('#notifications').hide();
    });

});

function showNotifications() {
    $.ajax({
        type: "POST",
        url: "php/fetch.php",
        data: {
            key: '123'
        },
        cache: false,
        success: function (data) {
            const contentData = JSON.parse(data);
            $('#notifications').html('');
    
            if (contentData.length > 0) {
                if (contentData.total == 0) {
                    $('#numHead').html("");
                } else {
                    $('#numHead').html(contentData[0].total);
                }
    
                for (let i = 1; i < contentData.length; i++) {
                    let date = contentData[i].date;
                    let dilihat = contentData[i].dilihat;
                    let id_notifikasi = contentData[i].id_notifikasi;
                    let id_user = contentData[i].id_user;
                    let notif_table = contentData[i].notif_table;
                    let status = contentData[i].status;
                    let type = contentData[i].type;
                    let uniqueid = contentData[i].uniqueid;
                    let url = contentData[i].url;
    
                    if (type == 'contact') {
                        type = "Halo! ada pesan baru";
                    }
    
                    if (dilihat == 'unseen') {
                        dilihat = 'success';
                    } else {
                        dilihat = 'dark';
                    }
    
                    let resultDiv = `
                        <a href="${url}?notification=${uniqueid}">
                            <div class="alert alert-${dilihat}" role="alert" title="${date}">
                                ${type}
                            </div>
                        </a>
                    `;
                    
                    $('#notifications').append(resultDiv);
                }
            } else {
                let isNull = `
                        <a href="#">
                            <div class="">
                                Tidak ada notifikasi
                            </div>
                        </a>
                    `;
                $('#notifications').append(isNull);
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX error: ' + xhr, status, error);
        }
    });    
}


function seenNotification() {
    $.ajax({
        type: "POST",
        url: "php/fetch.php",
        data: {
            key: '1234'
        },
        cache: false,
        succes: function(data){

        }
    });
}