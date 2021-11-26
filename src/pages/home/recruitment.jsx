import React from 'react';

export default function Recruitment() {
  return (
    <section
      className="module bg-dark-60"
      id="content"
      data-background="../images/titlebanner.png"
    >
      <div className="container">
        <div className="row">
          <div className="col-sm-6 col-sm-offset-3">
            <p>Get on the Hype train</p>
            <img src="assets/images/parrots/tacoparrot.gif" />
          </div>
        </div>
        <div className="module-small bg-dark-60">
          <div className="container">
            <div className="row">
              <div className="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
                <div className="callout-text font-alt">
                  <h3 className="callout-title" style={{ color: '#F9A12C' }}>
                    Want to write content?
                  </h3>
                  <p style={{ color: '#fff' }}>
                    Apply here to become one of our content creators.
                  </p>
                </div>
              </div>
              <div className="col-sm-6 col-md-6 col-lg-4">
                <form action="contentinfo.html">
                  <div className="text-center">
                    <button
                      className="btn btn-block btn-round btn-d"
                      id="cfsubmit"
                      type="submit"
                      style={{ backgroundColor: '#CA4C0C', marginTop: '5%' }}
                    >
                      Creators Wanted
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
