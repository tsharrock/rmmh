<style>
    /* Redmond MMH Brand Colors */
    :root {
        --redmond-red: #b32025; /* Primary Brand Red */
        --redmond-dark: #1a1a1a; /* Dark Charcoal Background */
        --redmond-light: #f4f4f4; /* Light Grey Text/Accents */
        --white: #ffffff;
    }

    footer {
        background-color: white;
        color: var(--redmond-dark);
        padding: 60px 20px 30px 20px;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        border-top: 4px solid var(--redmond-red);
    }

    .footer-container {
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 30px;
    }

    .footer-col h4 {
        color: var(--redmond-red);
        font-size: 1.1rem;
        margin-bottom: 25px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Red underline accent for headings */
    .footer-col h4::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -8px;
        width: 40px;
        height: 2px;
        background-color: var(--redmond-red);
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-col ul li {
        margin-bottom: 15px;
    }

    .footer-col ul li a {
        color: var(--redmond-dark);
        text-decoration: none;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: var(--redmond-red);
        padding-left: 5px;
    }

    .location-text {
        font-weight: bold;
        color: var(--white);
        display: block;
    }

    .footer-bottom {
        max-width: 1100px;
        margin: 50px auto 0 auto;
        padding-top: 20px;
        border-top: 1px solid #333;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        font-size: 0.85rem;
        color: #777;
    }

    .footer-bottom p {
        margin: 5px 0;
    }

    @media (max-width: 768px) {
        .footer-bottom {
            flex-direction: column;
            text-align: center;
        }
    }
</style>


<footer>
    <div class="tagline text-center mb-3"><h3>Serving All of Utah</h3></div>
    <div class="footer-container">

        <div class="footer-col">
            <h4>Redmond MMH</h4>
            <ul>
                <li><a href="/about">About</a></li>
                <li><a href="/insurance">Insurance Credentials</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Our Services</h4>
            <ul>
                <li><a href="/mental-health">Mental Health</a></li>
                <li><a href="/family-medicine">Family Medicine</a></li>
                <li><a href="/ketamine">Ketamine</a></li>
                <li><a href="/iv-nutrition">IV Nutrition & Injectables</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Northern Utah</h4>
            <ul>
                <li><a href="/cache-valley"><strong>Cache Valley:</strong> All Medical & Mental Health Services</a></li>
                <li><a href="/telehealth/salt-lake-city"><strong>Salt Lake City:</strong> Telehealth</a></li>
                <li><a href="/telehealth/ogden"><strong>Ogden:</strong> Telehealth</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Southern & Specialized</h4>
            <ul>
                <li><a href="/telehealth/provo"><strong>Provo:</strong> Telehealth</a></li>
                <li><a href="/telehealth/st-george"><strong>St. George:</strong> Telehealth</a></li>
                <li><a href="/telehealth/cedar-city"><strong>Cedar City:</strong> Telehealth</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2026 Redmond Medical & Mental Health. All Rights Reserved.</p>
    </div>
</footer>
