<?php 
include 'header.php';

// Get the product identifier from the URL query string
$productId = isset($_GET['id']) ? $_GET['id'] : null;

// If no product id is provided, redirect to the products page (or show an error)
if (!$productId) {
    header("Location: products.php");
    exit();
}

// In a real-world scenario, you might fetch data from a database or API.
// For demonstration purposes, we use a hard-coded associative array.
$products = [
    'identity-verification-details' => [
        'title' => 'Identity Verification Platform',
        'description' => 'Our Identity Verification Platform ensures secure and compliant onboarding for customers and businesses. Key components include:',
        'features' => [
            'Real-Time Verification: AI-driven document scanning and biometric authentication.',
            'Fraud Prevention: Detect identity theft, document forgery, and fake accounts.',
            'Regulatory Compliance: Meet KYC, AML, and GDPR requirements with ease.',
            'Seamless Integration: APIs and SDKs for effortless integration into existing systems.',
            'Use Cases: Banking, fintech, government services, telecom, and e-commerce.'
        ]
    ],
    'fraud-prevention-details' => [
        'title' => 'AI Fraud Prevention System',
        'description' => 'Protect your business with real-time fraud detection and risk assessment:',
        'features' => [
            'Behavioral Analytics: AI monitors transaction patterns to detect suspicious activity.',
            'Adaptive Machine Learning: Continuously improves detection accuracy based on real-time data.',
            'Multi-Channel Protection: Covers digital payments, online transactions, and customer interactions.',
            'Instant Risk Scoring: Provides real-time risk analysis to prevent fraudulent transactions.',
            'Industries Served: Banks, insurance, online marketplaces, financial institutions'
        ]
    ],
    'compliance-suite-details' => [
        'title' => 'Regulatory Compliance Suite',
        'description' => 'Ensure your business meets global compliance standards with automation:',
        'features' => [
            'Automated Compliance Tracking: AI-driven monitoring of regulatory requirements.',
            'Risk-Based Assessment: Helps businesses identify and mitigate compliance risks.',
            'Regulatory Reporting: Automatically generates compliance reports for audit purposes.',
            'Customization & Scalability: Designed for enterprises of all sizes.',
            'Applicable Sectors: Finance, healthcare, government, and enterprises handling sensitive data.'
        ]
    ]
];

// Check if the product exists. If not, show an error or redirect.
if (!array_key_exists($productId, $products)) {
    echo "<p>Product not found.</p>";
    include 'footer.php';
    exit();
}

$product = $products[$productId];
?>

<main class="main">
    <!-- Breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/pictures/breadcrumb.jpg)">
        <div class="container">
            <div class="site-breadcrumb-wpr">
                <h2 class="breadcrumb-title"><?php echo $product['title']; ?></h2>
                <ul class="breadcrumb-menu clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><?php echo $product['title']; ?></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Product Details -->
    <div class="service-single pos-rel de-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12">
                    <div class="service-single-wpr pr-50">
                        <h2 class="heading-2 mb-20"><?php echo $product['title']; ?></h2>
                        <div class="service-tx mb-40">
                            <p class="mb-20"><?php echo $product['description']; ?></p>
                        </div>
                        <div class="service-element  mb-40">
                            <div class="service-element-desc">
                                <h4 class="heading-4 mb-20">Key Features</h4>
                                <ul class="service-single-list">
                                    <?php foreach ($product['features'] as $feature) : ?>
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            <?php echo $feature; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="subs-sub" style="width: fit-content;">
                        <button type="submit">Discover More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Details -->
</main>

<?php include 'footer.php'; ?>
