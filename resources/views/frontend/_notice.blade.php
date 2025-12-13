<section class="notice-section">
    <div class="container" style="background: var(--color-orange)">
        <div class="notice-section-wrapper">
            <marquee
                behavior="scroll"
                direction="left"
                onmouseover="this.stop()"
                onmouseout="this.start()"
                style="color: #ffffff;">
                <span class="px-4">
                    <b>{{ $notice->headline ?? '' }}:&nbsp;</b>{{ $notice->description ?? '' }}
                </span>
            </marquee>
        </div>
    </div>
</section>
