const comment_forms = document.querySelectorAll('.comment-form');

comment_forms.forEach(form => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const post_id = form.post_id.value;
        const user_name = form.user_name.value;
        const comment_body = form.comment_body;
        const data = { user_id, post_id, comment_body: comment_body.value };
        
        fetch(comment_url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': form._token.value
            },
            body: JSON.stringify(data),
        })
        .then((response) => response.json())
        .then((data) => {
            const comment_box = document.getElementById(`${post_id}`);
            if (!data.status) {
                comment_body.value = '';
                const date = new Date(data.created_at);
                // remove empty comment box message
                if (comment_box.firstElementChild.tagName == "H4") {
                    comment_box.firstElementChild.remove()
                }
                // insert comment in comment box
                comment_box.insertAdjacentHTML('afterbegin', 
                    `<div class="rounded shadow-md p-2 my-2 relative">
                        <h6 class="text-sm">${ user_name }</h6>
                        <span class="text-[10px] absolute left-4 top-6">${ "now" }</span>
                        <p class="pt-3 leading-4 text-sm text-gray-800">${ data.comment_body }</p>
                    </div>`);
            } else {
                comment_body.focus();
                console.log(data.status);
            }
        })
        .catch((error) => {     
            console.error('Error:', error);
        });
    })
})