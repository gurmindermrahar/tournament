<div id="publish" class="tab-pane fade">
    <div class="tab-inner-content">
        <h4 class="text-24 font-400">Publish</h4>
        <hr class="divider">
        <span class="org-item">
            <label class="text-gray text-10px font-500 text-uppercase" for="desc">Publishing this tournament will enable registration and allow players to join.</label>
            <form class="org-rBtn">
                <div class="radio-group">
                    <input type="radio" id="option-15" checked="" name="selector" onclick="show17();">
                    <label for="option-15">Draft</label>
                    <input type="radio" id="option-16" value="_enable" name="selector" onclick="show18();">
                    <label for="option-16">Published</label>
                </div>
            </form>
        </span>
        <span class="org-item mt-5 d-block">
            <div id="show_enable8" class="mycheck" style="pointer-events: none; cursor: not-allowed; opacity:0.5;">
                <label class="text-gray text-10px font-500 text-uppercase" for="desc">Public tournaments are eligible to appear in search results and tournament listings.</label>
                <form class="org-rBtn">
                    <div class="radio-group">
                        <input type="radio" id="option-15" checked="" name="selector">
                        <label for="option-15">Private</label>
                        <input type="radio" id="option-16" value="_enable" name="selector">
                        <label for="option-16">Public</label>
                    </div>
                </form>
            </div>
        </span>
        <span class="org-item mt-5 d-block create-code-panel">
            <div class="new-stream-content" flex="" row-lg="" column="" layout="start">
                <div class="text-input-container" flex="" row="">
                    <div class="px-select" placeholder="'SELECT PROVIDER' | translate">
                        <div class="px-select full-width">
                            <input type="checkbox" name="" id=""> Use Join Code
                        </div>
                    </div>
                    <div class="px-text-input">
                        <div class="px-text-input" flex="" row="" layout="start stretch">
                            <input type="number" name="" class="border bg-0"> Join Codes
                        </div>
                    </div>
                    <div class="px-form-status-indicator-icon">
                        <div class="icon-container"></div>
                    </div>
                </div>
                <button class="primary_s_invert_btn">+ Add</button>
                </div>
        </span>
    </div>
</div>
