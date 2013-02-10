<div id="posts">
    {{ if posts }}
        {{ posts }}
            <div class="post">
                <div class="date">
                    <span class="day">{{ helper:date format="d" timestamp=created_on }}</span>
                    <span class="month">{{ helper:date format="M" timestamp=created_on }}</span>
                </div>

                <h3><a href="{{ url }}">{{ title }}</a></h3>

                <div class="preview">
                    {{ preview }}
                </div>

                <p><a href="{{ url }}">{{ helper:lang line="blog:read_more_label" }}</a></p>
            </div>
        {{ /posts }}

        {{ pagination }}

    {{ else }}
    
        {{ helper:lang line="blog:currently_no_posts" }}

    {{ endif }}
</div>