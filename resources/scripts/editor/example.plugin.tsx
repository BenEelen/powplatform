import { getBlockTypes, unregisterBlockType } from '@wordpress/blocks';
import { useEffect } from 'react';

/** Plugin name */
export const name = `example-plugin`;

/** Plugin title */
export const title = `Example plugin`;

/** Plugin render */
export const render = () => {
  useEffect(() => {
    // Unregister all blocks that aren't in the text, media, or design categories
    getBlockTypes()
      .filter((block) => ![`text`, `media`, `design`].includes(block?.category))
      .map((block) => block.name)
      .map(unregisterBlockType);
  }, []);

  return null;
};
