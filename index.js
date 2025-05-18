// Interaksi dengan list item
document.addEventListener("DOMContentLoaded", () => {
    const listItems = document.querySelectorAll("ol li");

    listItems.forEach(item => {
        item.addEventListener("click", () => {
            alert(`Kamu mengklik: ${item.textContent}`);
        });
    });

    // Interaksi dengan gambar
    const image = document.querySelector("img");
    if (image) {
        image.addEventListener("click", () => {
            alert("Ini adalah gambar.");
        });
    }

    // Tambahkan tombol tampil waktu
    const button = document.createElement("button");
    button.textContent = "Tampilkan Waktu Sekarang";
    button.addEventListener("click", () => {
        alert("Waktu saat ini: " + new Date().toLocaleString());
    });

    document.body.appendChild(button);
});
