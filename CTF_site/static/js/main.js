function loginUser(event) {
    event.preventDefault(); // 폼 제출 방지

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // 예시로 로그인 검증을 하였습니다. 실제로는 서버와의 통신이 필요합니다.
    if (username === "testUser" && password === "testPassword") {
        // 로그인 성공 시 개인정보 저장
        localStorage.setItem("userName", username);
        localStorage.setItem("userEmail", "test@example.com"); // 예시 이메일

        // 개인정보 표시
        displayUserInfo();
    } else {
        alert("로그인 정보가 올바르지 않습니다.");
    }
}

function displayUserInfo() {
    const userName = localStorage.getItem("userName");
    const userEmail = localStorage.getItem("userEmail");

    document.getElementById("userNameDisplay").innerText = "사용자 이름: " + userName;
    document.getElementById("userEmailDisplay").innerText = "이메일: " + userEmail;

    document.getElementById("userInfo").style.display = "block"; // 개인정보 표시
}
