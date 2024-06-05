function submitComment() {
    console.log("Button clicked"); // Kiểm tra nếu hàm được gọi
    const comment = document.getElementById("comment-textarea").value;
    console.log("Comment:", comment); // Kiểm tra giá trị của comment

    if (comment.length > 0 && comment.length <= 200) {
        fetch("{{ route('comments.store') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            body: JSON.stringify({ comment: comment }),
        })
            .then((response) => {
                console.log("Response status:", response.status); // Kiểm tra trạng thái phản hồi
                return response.json();
            })
            .then((data) => {
                console.log("Data received:", data); // Kiểm tra dữ liệu nhận được
                if (data.success) {
                    const commentBlock =
                        document.getElementById("comment-block");
                    const newComment = document.createElement("div");
                    newComment.textContent = data.comment.text;
                    commentBlock.appendChild(newComment);
                    document.getElementById("comment-textarea").value = "";
                } else {
                    alert("Error submitting comment");
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    } else {
        alert("Comment must be between 1 and 200 characters");
    }
}
