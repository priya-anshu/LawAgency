document.getElementById("recommendForm").addEventListener("submit", function (event) {
    event.preventDefault();

    const specialization = document.getElementById("specialization").value.trim();
    const experience = document.getElementById("experience").value;
    const fees = document.getElementById("fees").value;

    fetch("http://localhost:5000/recommend", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            specialization: specialization,
            experience: experience,
            fees: fees,
        }),
    })
        .then((response) => response.json())
        .then((data) => {
            const resultsDiv = document.getElementById("results");
            resultsDiv.innerHTML = "<h2>Recommendations:</h2>";
            data.recommendations.forEach((lawyer) => {
                resultsDiv.innerHTML += `
                    <div>
                        <h3>${lawyer.name}</h3>
                        <p>Specialization: ${lawyer.specialization}</p>
                        <p>Experience: ${lawyer.experience} years</p>
                        <p>Fees: $${lawyer.fees}</p>
                        <p>Contact: ${lawyer.contact_number}, ${lawyer.email}</p>
                    </div>
                `;
            });
        })
        .catch((error) => console.error("Error:", error));
});
