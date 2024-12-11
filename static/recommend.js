document.getElementById("recommendationForm").addEventListener("submit", function (event) {
    event.preventDefault();

    const specialization = document.getElementById("specialization").value;
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
    .then(response => response.json())
    .then(data => {
        const resultsDiv = document.getElementById("results");
        resultsDiv.innerHTML = "<h2>Recommended Lawyers:</h2>";
        if (data.recommendations && data.recommendations.length > 0) {
            data.recommendations.forEach(lawyer => {
                resultsDiv.innerHTML += `
                    <div>
                        <p><strong>${lawyer.name}</strong></p>
                        <p>Specialization: ${lawyer.specialization}</p>
                        <p>Experience: ${lawyer.experience} years</p>
                        <p>Fees: $${lawyer.fees}</p>
                        <p>Contact: ${lawyer.contact_number}</p>
                        <p>Email: ${lawyer.email}</p>
                    </div>
                    <hr>
                `;
            });
        } else {
            resultsDiv.innerHTML += "<p>No lawyers match your criteria.</p>";
        }
    })
    .catch(error => console.error("Error fetching recommendations:", error));
});
