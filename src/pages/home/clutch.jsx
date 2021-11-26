import React from 'react';

export default function Clutch() {
  return (
    <section className="module" id="clutchat">
      <div className="container">
        <div className="row">
          <div className="col-sm-6">
            <h2 className="module-title font-alt" style={{ fontSize: '4vh' }}>
              Clutchat <br />
              <small>Live in the real world.</small>
              <br />
              <center style={{ marginTop: '5%' }}>
                <img
                  src="assets/images/clutchat-logo.svg"
                  style={{ maxHeight: '300px' }}
                />
              </center>
              <br />
              <small> Roost in ours.</small>
            </h2>
          </div>
          <div className="col-sm-6">
            <h3
              align="center"
              className="font-alt"
              style={{
                fontWeight: 'bold',
                fontSize: '4vh',
                marginBottom: '5%',
                marginTop: '10%',
                color: '#cecece',
              }}
            >
              Industry changing chat & content app
            </h3>
            <p style={{ fontSize: '2vh', textAlign: 'center' }}>
              Clutchat is your gateway to becoming a pro gamer. It is a
              communication app with all the tools you need to make gaming your
              profession. It also has features that make life easier for the
              casual gamer as well.
            </p>
            <p style={{ fontSize: '2vh', textAlign: 'center' }}>
              Hire coaches, find a team, post content, and earn currency all
              from inside the app. It’s the Golden Gun in your gaming arsenal.
              With integration from all of your favorite gaming accounts,
              services, and tools: Clutchat becomes your Utility Belt.
            </p>
            <p style={{ fontSize: '2vh', textAlign: 'center' }}>
              Don't leave the cave without it.
            </p>
          </div>
        </div>
        <div className="row">
          <div className="col-sm-6 col-md-3 col-lg-3">
            <div className="alt-features-item">
              <div className="alt-features-icon">
                <span className="icon-chat" />
              </div>
              <h3 className="alt-features-title font-alt">Community</h3>Above
              all, Clutchat connects you with an empowering online community of
              your peers.
            </div>
            <div className="alt-features-item">
              <div className="alt-features-icon">
                <span className="icon-book-open" />
              </div>
              <h3 className="alt-features-title font-alt">Coaching</h3>Get
              advice from top-tier professional gamers as passionate 'bout your
              game as you are.
            </div>
            <div className="alt-features-item">
              <div className="alt-features-icon">
                <span className="icon-aperture" />
              </div>
              <h3 className="alt-features-title font-alt">Casting</h3>Sharing
              your personal game experience has never been easier, desktop or
              mobile.
            </div>
            <div className="alt-features-item">
              <div className="alt-features-icon">
                <span className="icon-mic" />
              </div>
              <h3 className="alt-features-title font-alt">Communication</h3>
              Staying in touch with your teammates is both natural and seamless.
            </div>
          </div>
          <div className="col-md-6 col-lg-6 hidden-xs hidden-sm">
            <div className="alt-services-image align-center">
              <img src="assets/images/clutchat-example-screen.png" />
            </div>
          </div>
          <div className="col-sm-6 col-md-3 col-lg-3">
            <div className="alt-features-item">
              <div className="alt-features-icon">
                <span className="icon-shield" />
              </div>
              <h3 className="alt-features-title font-alt">Cryptographic</h3>
              Accessing and contacting the community is decentralized and
              secure.
            </div>
            <div className="alt-features-item">
              <div className="alt-features-icon">
                <span className="icon-mobile" />
              </div>
              <h3 className="alt-features-title font-alt">Compact</h3>Everything
              you need, nothing you don't. Small and swift, on desktop or
              mobile.
            </div>
            <div className="alt-features-item">
              <div className="alt-features-icon">
                <span className="icon-basket" />
              </div>
              <h3 className="alt-features-title font-alt">Cartable</h3>Got your
              own swag to swap? Thanks to complete Gamerammo intergration,
              payment is a breeze.
            </div>
            <div className="alt-features-item">
              <div className="alt-features-icon">
                <span className="icon-flag" />
              </div>
              <h3 className="alt-features-title font-alt">Clutch.</h3>There is
              simply no other choice for complete immersion and dominance of
              your game. Be Alpha.
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
