<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gym Verification Dashboard</title>
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2c3e50;
            --accent: #e74c3c;
            --success: #2ecc71;
            --light: #f0f4f8;
            --dark: #34495e;
            --star-color: #f1c40f;
        }
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
            margin: 0;
            padding: 0;
        }
        .container { max-width: 1000px; margin: 0 auto; padding: 20px; }
        header {
            background-color: var(--secondary);
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        h1, h2 { margin: 0; }
        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .stats {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0;
        }
        .stat-card {
            background-color: var(--light);
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            flex: 1 1 200px;
            margin: 10px;
        }
        .stat-card h3 { margin: 0; font-size: 1em; color: var(--dark); }
        .stat-card p {
            font-size: 1.4em;
            font-weight: bold;
            margin: 10px 0 0;
            color: var(--primary);
        }
        .verification-status { text-align: center; }
        .status { font-size: 1.2em; font-weight: bold; margin-bottom: 10px; }
        a {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 1em;
            margin: 5px;
        }
        a:hover { opacity: 0.9; }
        a.reject { background-color: var(--accent); }
        a.change { background-color: #f1c40f; }
        .review-section { margin-top: 20px; }
        .overall-rating {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .rating-circle {
            width: 60px;
            height: 60px;
            background-color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }
        .rating-number { font-size: 24px; font-weight: bold; color: white; }
        .star-rating { display: inline-flex; }
        .star {
            width: 20px;
            height: 20px;
            background-repeat: no-repeat;
            background-size: contain;
        }
        .star-empty {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z' fill='%23e0e0e0'/%3E%3C/svg%3E");
        }
        .star-full {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z' fill='%23f1c40f'/%3E%3C/svg%3E");
        }
        .star-half {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z' fill='%23f1c40f'/%3E%3Cpath d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967' fill='%23fff'/%3E%3C/svg%3E");
        }
        .review-item {
            background-color: var(--light);
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .reviewer-info { display: flex; align-items: center; margin-bottom: 10px; }
        .reviewer-initial {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            margin-right: 10px;
        }
        .verified-badge {
            display: inline-flex;
            align-items: center;
            background-color: var(--success);
            color: white;
            border-radius: 50px;
            padding: 5px 10px;
            font-size: 0.8em;
            margin-left: 10px;
        }
        .verified-badge i {
            margin-right: 5px;
        }
        @media (max-width: 600px) {
            .stats { flex-direction: column; }
            .stat-card { margin: 5px 0; }
            .overall-rating { flex-direction: column; align-items: flex-start; }
            .rating-circle { margin-bottom: 10px; }
        }
        a{
          text-decoration: none;
        }
</style>
  </head>
  <body>
    <header>
      <h1>Gym Verification</h1>
    </header>
    <div class="container">
      <div class="card">
        <h2>{{uname}}</h2>
        <p>{{email1}}</p>

        <div class="stats">
          <div class="stat-card">
            <h3>Total Gym</h3>
            <p>{{totalgym}}</p>
          </div>
          <div class="stat-card">
            <h3>Total Members</h3>
            <p>{{totalMemberships}}</p>
          </div>
          <div class="stat-card">
            <h3>Total Revenue</h3>
            <p>{{wholerevenue}}</p>
          </div>
          <div class="stat-card">
            <h3>Average Rating</h3>
            <p>{{rating}}</p>
          </div>
        </div>

        <div class="verification-status">
  <div class="status">Verification Status: Pending</div>
  <a href="/admin/approve/?id={{id}}&status=accepted" class="btn btn-primary">Accept</a>
  <a href="/admin/approve/?id={{id}}&status=rejected" class="btn btn-danger reject">Reject</a>
  <a href="/admin/approve/?id={{id}}&status=pending" class="btn btn-warning change">Change Status</a>
</div>
      </div>

        <div class="review-section card">
            <h3>Reviews</h3>
            <div class="overall-rating">
                <div class="rating-circle">
                    <span class="rating-number">{{rating}}</span>
                </div>
                <div>
                    <div class="star-rating" id="overallStarRating"></div>
                    <div>Based on {{len}} ratings</div>
                </div>
            </div>
            {{!-- <h1>{{responsereview}}</h1> --}}
            {{#each reviews}}
            <div class="review-list">
                <div class="review-item">
                    <div class="reviewer-info">
                        <div class="reviewer-initial">J</div>
                        <div>
                            <div>{{this.user}}</div>
                            <div>{{this.reviewDate}}</div>
                        </div>
                    </div>
                    <div class="star-rating" id="reviewStarRating">{{this.rating}}</div>
                    <p>{{this.comment}}</p>
                </div>
            </div>
            {{/each}}
        </div>
    </div>

    
  </body>
</html>