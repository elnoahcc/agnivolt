    <!DOCTYPE html>
    <html lang="id">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Potensi Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body {
        font-family: 'Inter', sans-serif;
        }

        #potensi {
        background-color: #1A7EC4;
        padding: 80px 0;
        font-family: 'Segoe UI', sans-serif;
        }

        .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: start;
        }

        .section-title {
        font-family: 'Poppins', sans-serif;
        color: white;
        font-size: clamp(24px, 4vw, 32px);
        font-weight: 700;
        margin-bottom: 8px;
        line-height: 1.2;
        }

        .section-subtitle {
        font-family: 'Inter', sans-serif;
        color: rgba(255, 255, 255, 0.85);
        font-size: clamp(14px, 2.5vw, 16px);
        font-weight: 500;
        margin-bottom: 40px;
        }

        .map-wrapper {
        padding: 30px;
        border-radius: 8px;
        }

        .map-inner {
        padding: 30px;
        border-radius: 8px;
        }

        .map-inner img {
        width: 100%;
        height: auto;
        display: block;
        }

        .circle-diagram {
        position: relative;
        height: 200px;
        margin-bottom: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .circle {
        position: absolute;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        }

        .circle.tam {
        width: 180px;
        height: 180px;
        background-color: #E53E3E;
        left: 0;
        top: 10px;
        font-size: clamp(20px, 3vw, 28px);
        }

        .circle.sam {
        width: 140px;
        height: 140px;
        background-color: #38A169;
        left: 90px;
        top: 30px;
        font-size: clamp(18px, 2.5vw, 24px);
        }

        .circle.som {
        width: 100px;
        height: 100px;
        background-color: #3182CE;
        left: 150px;
        top: 50px;
        font-size: clamp(16px, 2vw, 20px);
        }

        .definition-block {
        color: white;
        }

        .definition {
        margin-bottom: 25px;
        padding-left: 20px;
        }

        .definition h4 {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(16px, 2.5vw, 18px);
        font-weight: 600;
        margin-bottom: 6px;
        }

        .definition p {
        font-family: 'Inter', sans-serif;
        font-size: clamp(13px, 2vw, 15px);
        font-weight: 400;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.9);
        }

        .border-red { border-left: 4px solid #E53E3E; }
        .border-green { border-left: 4px solid #38A169; }
        .border-blue { border-left: 4px solid #3182CE; }

        /* Contact Section */
        #contact {
        background-color: #f9fafb;
        padding: 80px 20px;
        }

        #contact .contact-container {
        max-width: 600px;
        margin: 0 auto;
        background: white;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        #contact h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 28px;
        font-weight: 700;
        color: #1F2937;
        margin-bottom: 24px;
        text-align: center;
        }

        #contact form {
        display: flex;
        flex-direction: column;
        gap: 20px;
        }

        #contact label {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-weight: 500;
        color: #374151;
        margin-bottom: 6px;
        }

        #contact input,
        #contact textarea {
        font-family: 'Inter', sans-serif;
        padding: 12px;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        font-size: 14px;
        width: 100%;
        resize: vertical;
        }

        #contact button {
        padding: 12px 24px;
        background-color: #1A7EC4;
        color: white;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
        }

        #contact button:hover {
        background-color: #16689f;
        }
    </style>
    </head>
    <body>
    

    <section id="contact">
        <div class="contact-container">
        <h2>Hubungi Kami</h2>
        <form action="#" method="post">
            <div>
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" required>
            </div>
            <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            </div>
            <div>
            <label for="message">Pesan</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Kirim Pesan</button>
        </form>
        </div>
    </section>
    </body>
    </html>
