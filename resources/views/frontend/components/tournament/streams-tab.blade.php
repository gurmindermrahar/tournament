<div id="streams" class="tab-pane fade">
    <div class="tab-title bg-gray">
        Streams (Optional)
    </div>
    <div class="tab-inner-content">
        <div id="container">
            <section id="mainsection" class="mb-20 bg-gray px-5 py-5">
                <h4 class="text-24 font-400">New Stream</h4>
                <div class="new-stream-content" flex="" row-lg="" column="" layout="start">
                    <div class="text-input-container" flex="" row="">
                        <div class="px-select" placeholder="'SELECT PROVIDER' | translate">
                            <div class="px-select full-width border-0">
                                <p class="text-gray text-10px font-500 text-uppercase"></p>
                                <select class="select form-control border-bottom bg-0 text-14px text-white">
                                    <option >SELECT PROVIDER</option>
                                    <option label="https://twitch.tv/" value="string:twitch.tv">https://twitch.tv/</option>
                                    <option label="https://smashcast.tv/" value="string:smashcast.tv">https://smashcast.tv/</option>
                                    <option label="https://www.mobcrush.com/" value="string:mobcrush.com">https://www.mobcrush.com/</option>
                                    <option label="https://youtube.com/watch?v=" value="string:youtube.com">https://youtube.com/watch?v=</option>
                                </select>
                            </div>
                        </div>
                        <div class="px-text-input">
                            <div class="px-text-input" flex="" row="" layout="start stretch">
                                <input type="text" placeholder="Channel Name" class="border-bottom text-white bg-0">
                            </div>
                        </div>
                        <div class="px-form-status-indicator-icon">
                            <div class="icon-container"></div>
                        </div>
                    </div>
                    <button type="button" class="primary_s_invert_btn">
                        <span>Save</span>
                    </button>
                    <button type="button" class="primary_s_invert_btn">
                        <span>Remove</span>
                    </button>
                </div>
            </section>
        </div>

        <button id="newsectionbtn" class="primary_s_invert_btn">+New Section</button>
    </div>
</div>
