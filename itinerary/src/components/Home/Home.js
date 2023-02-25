import { ReactNode, useEffect, useState } from 'react';
import {
  Box,
  Flex,
  Avatar,
  Link,
  Button,
  Menu,
  Heading,
  MenuButton,
  MenuList,
  MenuItem,
  MenuDivider,
  useDisclosure,
  useColorModeValue,
  Stack,
  useColorMode,
  Center,
  Input,
  Container,
  AccordionIcon,
  AccordionPanel,
  AccordionItem,
  AccordionButton,
  Accordion,
} from '@chakra-ui/react';
import { MoonIcon, SunIcon } from '@chakra-ui/icons';

const NavLink = ({ children }: { children: ReactNode }) => (
  <Link
    px={2}
    py={1}
    rounded={'md'}
    _hover={{
      textDecoration: 'none',
      bg: useColorModeValue('gray.200', 'gray.700'),
    }}
    href={'#'}
  >
    {children}
  </Link>
);

function Home() {
  const { colorMode, toggleColorMode } = useColorMode();
  const { isOpen, onOpen, onClose } = useDisclosure();
  const [searchQuery, setSearchQuery] = useState('');
  const [loading, setLoading] = useState(false);
  const [searchResponse, setSearchResponse] = useState([]);

  const handleInputChange = e => setSearchQuery(e.target.value);
  const handleKeyUp = () => setLoading(true);

  const getSearchResponse = async () => {
    try {
      const url = `https://hotels4.p.rapidapi.com/locations/v3/search?q=${searchQuery}&locale=en_US&langid=1033&siteid=300000001`;

      const options = {
        method: 'GET',
        headers: {
          'X-RapidAPI-Key':
            '1dbca73713msh95e3fb85a711e71p153665jsn83a2d9875914',
          'X-RapidAPI-Host': 'hotels4.p.rapidapi.com',
        },
      };

      fetch(url, options)
        .then(res => res.json())
        .then(json => setSearchResponse(json.sr))
        .catch(err => console.error('error:' + err));
    } catch (error) {}
  };

  useEffect(() => {
    async function getResponse() {
      await getSearchResponse();
    }
    getResponse();
    setLoading(false);
    // console.log(searchResponse);
  }, [searchQuery]);

  const response =
   searchResponse && searchResponse.length &&
    searchResponse.map(data => (
      // console.log('Neraj -> ', data)
      // <div key={data.index}>{data?.regionNames?.primaryDisplayName}</div>
      <AccordionItem key={data.index}>
        <h2>
          <AccordionButton>
            <Box as="span" flex="1" textAlign="left">
              {data?.regionNames?.primaryDisplayName}
            </Box>
            <AccordionIcon />
          </AccordionButton>
        </h2>
        <AccordionPanel pb={4}>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </AccordionPanel>
      </AccordionItem>
    ));

  console.log('>>' + response);
  return (
    <>
      <Box bg={useColorModeValue('gray.100', 'gray.900')} px={4}>
        <Flex h={16} alignItems={'center'} justifyContent={'space-between'}>
          <Box>
            <Heading>Itinerary.</Heading>
          </Box>

          <Flex alignItems={'center'}>
            <Stack direction={'row'} spacing={7}>
              <Button onClick={toggleColorMode}>
                {colorMode === 'light' ? <MoonIcon /> : <SunIcon />}
              </Button>
            </Stack>
          </Flex>
        </Flex>
      </Box>
      <Flex
        h={'100vh'}
        justifyContent={'center'}
        flexWrap="wrap"
        alignItems={'center'}
      >
        <Box px={200} w={'100%'} flexBasis={'100%'}>
          <Input
            py={5}
            variant="flushed"
            placeholder="Search for hotels in your city..."
            value={searchQuery}
            onChange={handleInputChange}
            onKeyUp={handleKeyUp}
            fontSize={'2rem'}
            fontWeight={'bold'}
            s
          />
        </Box>
        {loading && searchResponse && searchResponse.length > 0 && (
          <Box px={200} w={'100%'} flexBasis={'100%'}>
            <Accordion defaultIndex={0} allowMultiple>
              {response}
            </Accordion>
          </Box>
        )}
      </Flex>
    </>
  );
}

export default Home;
