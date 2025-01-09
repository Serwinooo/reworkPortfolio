<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <!-- admin.php -->
    <div class="container">
        <!-- Add Product Section -->
        <h2>Admin - Add New Product</h2>
        <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>

    <!-- User Messages Section -->
    <div class="container mt-5">
        <h2>Admin - User Messages</h2>
        <div id="user-list" style="margin-bottom: 20px;">
            <h4>Active Conversations</h4>
            <!-- Placeholder for list of user conversations -->
        </div>
        <div id="messages" style="border: 1px solid #ddd; padding: 10px; height: 400px; overflow-y: auto;"></div>
        <div id="reply-section" class="mt-3">
            <h5>Reply to User</h5>
            <form id="reply-form">
                <input type="hidden" id="reply-device-id">
                <textarea id="reply-message" class="form-control" rows="3" placeholder="Type your reply..." required></textarea>
                <button type="submit" class="btn btn-primary mt-2">Send Reply</button>
            </form>
        </div>
    </div>
</body>
</html>

<script src="admin.js"></script>
