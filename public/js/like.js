let postId;

// const like = (btn) => {
//     btn.preventDefault();
    
//     postId = btn.target.dataset['id'];

//     let data = {
//         post_id: postId,
//         _token: token
//     }

//     fetch(url, {
//         Method: 'POST',
//         Body: data,
//         Headers: {
//             'Accept': 'application/json',
//             'Content-Type': 'application/json'
//         }
//     }).then((response) => {
//         return response.json()
//     }).then((res) => {
//         if (res.status === 201) {
//             console.log("Post successfully created!")
//         }
//     }).catch((error) => {
//         console.log(error)
//     })
// }




$('.like').on('click', function (btn) {
    btn.preventDefault();

    postId = btn.target.dataset['id'];

    let data = {
        post_id: +postId,
        _token: token
    }
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
    //     }
    // });

    $.ajax({
        type: "POST",
        url: "https://jsonplaceholder.typicode.com/posts",
        data: data,
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            console.log(data);
        },
        error:function(){ 
            console.log(data);
        }
    })
})