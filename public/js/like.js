// const like_forms = document.querySelectorAll('.like-form');

// like_forms.forEach(form => {
//     form.addEventListener('submit', (e) => {
//         e.preventDefault();
//         const post_id = form.post_id.value;
//         const data = {
//             user_id : user_id,
//             post_id : post_id,
//          };

//         fetch(url, {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-Token': form._token.value
//         },
//             body: JSON.stringify(data),
//         })
//         .then((response) => response.json())
//         .then((data) => {
//             const like_btn = form.like;
//             const dislike_btn = form.dislike;
//             if (data.status === "like") {
//                 dislike_btn.classList.add('hidden');
//                 like_btn.classList.remove('hidden');
//             } else {
//                 dislike_btn.classList.remove('hidden');
//                 like_btn.classList.add('hidden');
//             }
//             console.log(data);
//         })
//         .catch((error) => {
//             console.error('Error:', error);
//         });
        
//     })
    
// })


const like_forms = document.querySelectorAll('.like-form');

const likeQty = (id) => document.querySelector(`.like_qty_${ id }`);

like_forms.forEach(form => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const post_id = form.post_id.value;
        const data = {
            user_id : user_id,
            post_id : post_id,
         };

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': form._token.value
        },
            body: JSON.stringify(data),
        })
        .then((response) => response.json())
        .then((data) => {
            const like_btn = form.like;

            if (data.status === "like") {
                like_btn.innerHTML = `<i class="fa-solid fa-thumbs-up pointer-events-none"></i>`
                likeQty(post_id).innerHTML ++
            } else {
                like_btn.innerHTML = `<i class="fa-regular fa-thumbs-up pointer-events-none"></i>`
                likeQty(post_id).innerHTML --
            }
            console.log(data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
        
    })
    
})