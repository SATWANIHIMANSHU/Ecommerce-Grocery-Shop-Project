<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Feedback Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    .feedback-form {
      background-color: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      width: 100%;
      margin: 20px;
    }
    .feedback-form h2 {
      margin-bottom: 20px;
      font-size: 28px;
      font-weight: bold;
      text-align: center;
    }
    .feedback-form label {
      font-weight: 500;
    }
    .feedback-form button {
      background-color: #007bff;
      border: none;
    }
    .feedback-form button:hover {
      background-color: #0056b3;
    }
    @media (max-width: 768px) {
      .feedback-form {
        padding: 20px; /* Reduce padding for medium screens */
      }
      .feedback-form h2 {
        font-size: 24px; /* Adjust heading size for medium screens */
      }
    }
    @media (max-width: 576px) {
      .feedback-form {
        padding: 15px; /* Further reduce padding for small screens */
      }
      .feedback-form h2 {
        font-size: 20px; /* Smaller heading for small screens */
      }
      .feedback-form button {
        font-size: 16px; /* Larger button text for small screens */
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8 col-sm-12">
        <div class="feedback-form">
          <h2 class="mt-3">Customer Feedback</h2>
          <p>Please let us know about your experience with our product and service.</p>
          
          <form action="submit_feedback.php" method="POST">
            <hr>
            <div class="mt-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name"
              name="name" placeholder="Your Name" required>
            </div>
            <div class="mt-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
            </div>
            
            <div class="mt-3">
              <label for="feedback" class="form-label">Feedback</label>
              <textarea class="form-control" id="feedback" rows="4" placeholder="Your Feedback" name="feedback" required></textarea>
            </div>
            <div class="mt-3">
              <label for="rating" class="form-label">How satisfied are you with our company overall?</label>
              <select class="form-select" id="rating" name="rating" required>
                <option selected disabled>Please Select</option>
                <option value="1">Very Satisfied</option>
                <option value="2">Satisfied</option>
                <option value="3">Undecided</option>
                <option value="4">Unsatisfied</option>
                <option value="5">Very Unsatisfied</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Submit Feedback</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
