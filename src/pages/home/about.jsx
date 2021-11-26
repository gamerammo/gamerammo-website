import React from 'react';
// import QueueAnim from 'rc-queue-anim';
// import { Button, Col, Row, Card } from 'antd';

export default function About() {
  return (
    <div className="main">
      <section className="module" id="about">
        <div className="container" style={{ width: '95%' }}>
          <div className="row">
            <div className="col-sm-5">
              <h2 className="module-title font-alt" style={{ fontSize: '4vh' }}>
                Gaming is a Profession
                <br />
                <small style={{ fontSize: '2vh' }}>
                  Grassroots gamer Movement
                </small>
              </h2>
              <p style={{ fontSize: '3vh' }}>
                Gamerammo is on a mission of declaration.
                <em>Gaming is a Profession</em>. We provide an incentive to win
                outside of the game so you can stay in game. We want people to
                stop saying, "You're wasting your life playing video games."
                Gamers &mdash; Look them in the eyes and say, “it’s my job.”
              </p>
            </div>
            <div className="col-sm-7">
              <div className="col-sm-4">
                <center>
                  <img
                    src="assets/images/clutchat-logo.svg"
                    style={{ maxHeight: '225px' }}
                  />
                </center>
                <h3
                  align="center"
                  className="font-alt"
                  style={{ fontWeight: 'bold', fontSize: '3vh' }}
                >
                  Be Clutch
                </h3>
                <p style={{ fontSize: '2vh' }}>
                  Our flagship chat & content app, Clutchat, is your pro utility
                  belt to make <em>clutch</em> content for other gamers to
                  reward your Voice. Be clutch. Earn Gamerammo.
                </p>
              </div>
              <div className="col-sm-4">
                <center>
                  <img
                    src="assets/images/gamerammo-petdal.svg"
                    style={{ maxHeight: '225px' }}
                  />
                </center>
                <h3
                  align="center"
                  className="font-alt"
                  style={{ fontWeight: 'bold', fontSize: '3vh' }}
                >
                  Time to Reload
                </h3>
                <p style={{ fontSize: '2vh' }}>
                  Gamerammo is how you reload your utility belt. Being clutch
                  allows you to level up and earn Gamerammo. Redeem it for
                  power-ups, coaching, or more Voice.
                </p>
              </div>
              <div className="col-sm-4">
                <center>
                  <img
                    src="assets/images/code-is-law.svg"
                    className="img-circle"
                    style={{ maxHeight: '225px' }}
                  />
                </center>
                <h3
                  align="center"
                  className="font-alt"
                  style={{ fontWeight: 'bold', fontSize: '3vh' }}
                >
                  Code is Law
                </h3>
                <p style={{ fontSize: '2vh' }}>
                  2nd wave blockchains are for users. Ours is for gamers: code
                  is law & inflated value loses. You're what makes us valuable.
                  Ethereum Classic ensures code is law.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
