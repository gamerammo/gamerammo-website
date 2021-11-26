import React from 'react';

export default function Social() {
  return (
    <div className="module-small bg-dark">
      <div className="container">
        <div className="row">
          <div className="col-xs-12">
            <div className="col-xs-3">
              <a href="https://discord.gg/5wBRPE8" className="discord" />
            </div>
            <div className="col-xs-3">
              <div className="social-section">
                <a
                  href="https://twitter.com/gamerammo"
                  className="social-section-icon twitter"
                >
                  Twitter
                </a>
              </div>
            </div>
            <div className="col-xs-3">
              <div className="social-section">
                <a
                  href="https://twitch.tv/gamerammo"
                  className="social-section-icon twitch"
                >
                  Twitch
                </a>
              </div>
            </div>

            <div className="col-xs-3">
              <div className="social-section">
                <a
                  href="https://www.youtube.com/channel/UCCVoF6xNZjnzp4GlBKFNhxA"
                  className="social-section-icon youtube"
                >
                  YouTube
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
