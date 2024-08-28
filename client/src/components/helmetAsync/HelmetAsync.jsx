import { Helmet, HelmetProvider } from "react-helmet-async"
import { useLocation } from "react-router-dom"

const HelmetAsync = () => {
  const { pathname } = useLocation();

  function capitalize() {
    return pathname.charAt(1).toUpperCase() + pathname.slice(2);
  }

  let newPath = capitalize(pathname.substring(1));

  if (newPath !== "") {
    newPath = "| " + newPath;
  }

  return (
    <HelmetProvider>
      <Helmet>
        <title>Prestige {newPath}</title>
        <link rel="canonical" href={pathname !== "/" ? `https://prestige-estate.am${pathname}` : "https://prestige-estate.am"} />
        <meta name="description" content={pathname !== "/" ? `x ${pathname.substring(1)} page.` : "x."} />
      </Helmet>
    </HelmetProvider>
  );
};

export default HelmetAsync;
