import React from 'react';

export default function TestAlpha() {
  return (
    <div className="module-small bg-dark">
      <div className="container">
        <div className="row">
          <div className="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
            <div className="callout-text font-alt">
              <h3 className="callout-title">Be Clutch.</h3>
              <p>
                Alpha is almost upon us. Don't miss out on the opportunity to
                put Clutchat in your hands & Gamerammo in your wallet first.
              </p>
            </div>
          </div>
          <div className="col-sm-6 col-md-6 col-lg-4">
            <div className="callout-btn-box">
              <form action="/clutchat">
                <div className="text-center">
                  <button
                    className="btn btn-block btn-round btn-d"
                    id="cfsubmit"
                    type="submit"
                  >
                    Test Alpha
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
