<div>
    <div class="fixed top-0 left-0 w-screen h-screen bg-gray-100 flex items-center justify-center">
        <div id="barcode-scanner" class="h-full w-full relative">
            <!-- Overlay text -->
            <div id="overlay-text" class="absolute inset-0 flex justify-center items-center bg-opacity-50 text-white text-lg font-bold">
                Scan barcode here: {{ $barcode }}
            </div>
        </div>
    </div>
</div>

@script
<script>
    Quagga.init({
        inputStream: {
            name: "Live",
            type: "LiveStream",
            target: document.querySelector("#barcode-scanner")
        },
        decoder: {
            readers: ["ean_reader"]
        }
    }, function(err) {
        if (err) {
            console.error("Error initializing Quagga:", err);
            return;
        }
        console.log("Initialization finished. Ready to start");

        Quagga.start();
    });

    // Listen for barcode detection
    Quagga.onDetected(function(result) {
        console.log("Barcode detected and read successfully:", result);

        // Handle the detected barcode here
        $wire.sendBarcodeData(result.codeResult.code);

        Quagga.stop(); // Stop scanning after a barcode is detected
    });

</script>
@endscript

@assets
<style>
    #barcode-scanner video {
        width: 100% !important;
    }
</style>

<!-- Include the library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
@endassets
