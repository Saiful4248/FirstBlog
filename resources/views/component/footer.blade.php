<style>
    footer {
        width: 100%;
        background-color: #343a40;
        color: #fff;
        padding: 20px 0;
    }

    .footer-links a {
        color: #ffc107;
        margin: 0 10px;
    }

    .footer-links a:hover {
        color: #e0a800;
    }
</style>
<footer class="text-center w-100">
    <div class="footer-links">
        <a href="https://www.facebook.com" target="_blank">Facebook</a> |
        <a href="https://www.twitter.com" target="_blank">Twitter</a> |
        <a href="https://www.instagram.com" target="_blank">Instagram</a>
    </div>
    <p class="mt-3"> Copyright&copy;InspirationHub{{ date('Y') }}.</p>
    <form action="{{ route('newsletter.store') }}" method="POST" class="form-inline justify-content-center mt-3">
        @csrf
        <div class="form-group mb-2">
            <label for="email" class="sr-only">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                placeholder="Subscribe to our newsletter">
        </div>
        <button type="submit" class="btn btn-primary mb-2 ml-2">Subscribe</button>
    </form>
</footer>