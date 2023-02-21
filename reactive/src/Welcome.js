function Welcome() {
  return (
    <>
      <h1>
        Let's Build,
        <span>Something Crazy</span>
      </h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. At inventore
        modi impedit soluta officia doloremque dolore possimus deleniti
        incidunt. Voluptate voluptatem odio iusto minima soluta sunt vero
        tempora illo aliquam.
      </p>
      <div className="row mt-4">
        <div className="col-5">
          <div className="card" aria-hidden="true">
            <div className="placeholder-glow">
              <span
                className="placeholder col-12"
                style={{ height: "136px" }}
              ></span>
            </div>
            <div className="card-body">
              <h5 className="card-title placeholder-glow">
                <span className="placeholder col-6"></span>
              </h5>
              <p className="card-text placeholder-glow">
                <span className="placeholder col-7"></span>
                <span className="placeholder col-4"></span>
                <span className="placeholder col-4"></span>
                <span className="placeholder col-6"></span>
                <span className="placeholder col-8"></span>
              </p>
              <a
                href="#!"
                className="btn btn-secondary disabled placeholder col-2"
              >
                f
              </a>
            </div>
          </div>
        </div>
        <div className="col-7">
          <div className="card" aria-hidden="true">
            <div className="placeholder-glow">
              <span
                className="placeholder col-12"
                style={{ height: 130 }}
              ></span>
            </div>
            <div className="card-body">
              <h5 className="card-title placeholder-glow">
                <span className="placeholder col-6"></span>
              </h5>
              <p className="card-text placeholder-glow">
                <span className="placeholder col-7"></span>
                <span className="placeholder col-4"></span>
                <span className="placeholder col-4"></span>
                <span className="placeholder col-6"></span>
                <span className="placeholder col-8"></span>
              </p>
              <a
                href="#!"
                className="btn btn-secondary disabled placeholder col-2"
              >
                F
              </a>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default Welcome;
