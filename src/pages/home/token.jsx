import React from 'react';

export default function Token() {
  return (
    <section className="module" id="token">
      <div className="container">
        <div className="row">
          <div className="xs-col-12">
            <center>
              <h2 className="module-title font-alt" style={{ fontSize: '4vh' }}>
                {' '}
                Three Token Ecomony
                <br />
                <small style={{ fontSize: '2vh' }}>
                  How your gaming gets rewarded
                </small>
              </h2>
            </center>
          </div>
        </div>
        <div className="row multi-columns-row" style={{ textAlign: 'center' }}>
          <div className="col xs-12 col-sm-4">
            <div className="col-xs-5 col-sm-12">
              <div className="features-item">
                <div className="features-icon" style={{ marginTop: '50px' }}>
                  <img src="assets/images/voice.svg" />
                </div>
              </div>
            </div>
            <div className="col-xs-7 col-sm-12">
              <h3
                className="features-title font-alt"
                style={{ fontSize: '3vh' }}
              >
                <b>Voice</b> <br /> <small>Impact Content</small>
              </h3>
              <p style={{ fontSize: '2vh' }}>
                <b>Voice</b> let's you directly impact the content you see. You
                get ten per day to use and their burned the next. Choose what
                you produce and support wisely.
              </p>
            </div>
          </div>
          <div className="col xs-12 col-sm-4">
            <div className="col-xs-5 col-sm-12">
              <div className="features-item">
                <div className="features-icon" style={{ marginTop: '50px' }}>
                  <img src="assets/images/float.svg" />
                </div>
              </div>
            </div>
            <div className="col-xs-7 col-sm-12">
              <h3
                className="features-title font-alt"
                style={{ fontSize: '3vh' }}
              >
                <b>Float</b> <br /> <small>Usable Exchange</small>
              </h3>
              <p style={{ fontSize: '2vh' }}>
                <b>Float</b> is translateable into real world currency.{' '}
                <b>Float</b> represents the distribution of real world currency
                based on your input and impact while using the platform.
              </p>
            </div>
          </div>
          <div className="col xs-12 col-sm-4">
            <div className="col-xs-5 col-sm-12">
              <div className="features-item">
                <div className="features-icon" style={{ marginTop: '50px' }}>
                  <img src="assets/images/gamerammo-petdal.svg" />
                </div>
              </div>
            </div>
            <div className="col-xs-7 col-sm-12">
              <h3
                className="features-title font-alt"
                style={{ fontSize: '3vh' }}
              >
                <b>Gamerammo</b> <br /> <small>The Reward</small>
              </h3>
              <p style={{ fontSize: '2vh' }}>
                <b>Gamerammo</b> is what crypto should've been from the start.
                Security through cryptography. No ICO. No speculaion.
                Blockchains aren't all smoke and mirrors.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
