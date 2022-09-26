const like_forms = document.querySelectorAll('.like-form');

const likeQty = (id) => document.querySelector(`.like-qty-${ id }`);

like_forms.forEach(form => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const post_id = form.post_id.value;
        const data = {
            user_id : user_id,
            post_id : post_id,
         };

        fetch(like_url, {
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
        })
        .catch((error) => {
            console.error('Error:', error);
        });
        
    })
    
})