import React from 'react';

export default function Footer() {
  return (
    <footer className="footer bg-dark" style={{ backgroundColor: '#000' }}>
      <div className="container">
        <div className="row">
          <div className="col-sm-6">
            <p className="copyright font-alt">
              &copy; 2018-2021 &nbsp;<a href="index.html">Gamer Ammo, Inc.</a>,
              All Rights Reserved
            </p>
          </div>

          <div className="col-sm-6">
            <div className="footer-social-links">
              <a href="tel:2693890082">
                <i className="fa fa-phone" />
              </a>
              <a href="mailto:info@gamerammo.io">
                <i className="fa fa-envelope" />
              </a>
              <a href="https://medium.com/gamerammo">
                <i className="fa fa-medium" />
              </a>
              <a href="https://www.facebook.com/gamerammo/">
                <i className="fa fa-facebook" />
              </a>
              <a href="https://twitter.com/gamerammo/">
                <i className="fa fa-twitter" />
              </a>
              <a href="https://twitch.tv/gamerammo">
                <i className="fa fa-gamepad" />
              </a>
              <a href="https://github.com/gamerammo">
                <i className="fa fa-github" />
              </a>
              <a href="https://reddit.com/r/gamerammo">
                <i className="fa fa-reddit" />
              </a>
              <a href="https://discord.gg/5wBRPE8">
                <i className="fa fa-comments" />
              </a>
              <a href="https://t.me/joinchat/AAAAAE4MAfKEIr6RT6hVVQ">
                <i className="fa fa-telegram" />
              </a>
              <a href="https://snapchat.com/add/gamerammo">
                <i className="fa fa-snapchat" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
}
