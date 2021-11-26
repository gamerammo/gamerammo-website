import React from 'react';

export default function Header() {
  return (
    <nav
      className="navbar navbar-custom navbar-transparent navbar-fixed-top one-page"
      role="navigation"
    >
      <div className="container">
        <div className="navbar-header">
          <button
            className="navbar-toggle"
            type="button"
            data-toggle="collapse"
            data-target="#custom-collapse"
          >
            <span className="sr-only">Toggle navigation</span>
            <span className="icon-bar" />
            <span className="icon-bar" />
            <span className="icon-bar" />
          </button>
          <a className="navbar-brand gamerammo" href="/" />
        </div>
        <div className="collapse navbar-collapse" id="custom-collapse">
          <ul className="nav navbar-nav navbar-right">
            <li>
              <a className="section-scroll" href="/">
                Home
              </a>
            </li>
            <li>
              <a
                className="section-scroll"
                href="https://gamerammo.gg/clutchat/"
              >
                Clutchat
              </a>
            </li>
            <li>
              <a className="section-scroll" href="#token">
                Economy
              </a>
            </li>
            <li>
              <a className="section-scroll" href="https://gamerammo.gg/about/">
                About
              </a>
            </li>
            <li>
              <a className="section-scroll" href="#content">
                Hype Train
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  );
}
