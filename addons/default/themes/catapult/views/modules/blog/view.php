<div id="posts">
    {{ post }}
        <div class="post">
            <div class="date">
                <span class="day">{{ helper:date format="d" timestamp=created_on }}</span>
                <span class="month">{{ helper:date format="M" timestamp=created_on }}</span>
            </div>

            <h3><a href="{{ url }}">{{ title }}</a></h3>
            <p class="author"><strong>- by {{ user:display_name user_id=created_by }}</strong></p>

            <div class="body">
                {{ body }}
            </div>
        </div>
    {{ /post }}
</div>