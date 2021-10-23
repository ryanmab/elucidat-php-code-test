<?php
use App\Factories\ItemFactory;
use App\Items\AgedBrie;
use App\Items\BackstagePass;
use App\Items\ConjuredItem;
use App\Items\DegradableItem;
use App\Items\Item;
use App\Items\LegendaryItem;

describe('Item Factory', function () {
    context('Normal Items', function () {
        it('creates a normal degradable item', function () {
            $itemInstance = ItemFactory::getInstance(new Item("Normal", 10, 5));
            expect(get_class($itemInstance))->toBe(DegradableItem::class);
        });
        it('creates a normal degradable item which has a different name', function () {
            $itemInstance = ItemFactory::getInstance(new Item("Another Normal Degradable Item", 10, 5));
            expect(get_class($itemInstance))->toBe(DegradableItem::class);
        });
    });
    context('Brie Items', function () {
        it('creates an aged brie item', function () {
            $itemInstance = ItemFactory::getInstance(new Item("Aged Brie", 10, 5));
            expect(get_class($itemInstance))->toBe(AgedBrie::class);
        });
        it('creates an aged brie item with a name which has differing character case', function () {
            $itemInstance = ItemFactory::getInstance(new Item("AGed BRIE", 10, 5));
            expect(get_class($itemInstance))->toBe(AgedBrie::class);
        });
    });
    context('Sulfuras Items', function () {
        it('creates a Sulfuras (Legendary) item', function () {
            $itemInstance = ItemFactory::getInstance(new Item("Sulfuras, Hand of Ragnaros", 10, 5));
            expect(get_class($itemInstance))->toBe(LegendaryItem::class);
        });
        it('creates a Sulfuras (Legendary) item with a name which has differing character case', function () {
            $itemInstance = ItemFactory::getInstance(new Item("SuLFuras, HAND of Ragnaros", 10, 5));
            expect(get_class($itemInstance))->toBe(LegendaryItem::class);
        });
    });
    context('Backstage Passes', function () {
        it('creates a backstage pass', function () {
            $itemInstance = ItemFactory::getInstance(new Item("Backstage passes to a TAFKAL80ETC concert", 10, 5));
            expect(get_class($itemInstance))->toBe(BackstagePass::class);
        });
        it('creates a backstage pass with a name which has differing character case', function () {
            $itemInstance = ItemFactory::getInstance(new Item("bACKSTAgE PaSSES to a TAFKAL80ETC CONCERt", 10, 5));
            expect(get_class($itemInstance))->toBe(BackstagePass::class);
        });
    });
    context('Conjured Item', function () {
        it('creates a conjured item', function () {
            $itemInstance = ItemFactory::getInstance(new Item("Conjured Mana Cake", 10, 5));
            expect(get_class($itemInstance))->toBe(ConjuredItem::class);
        });
        it('creates a conjured item with a name which has differing character case', function () {
            $itemInstance = ItemFactory::getInstance(new Item("ConJUred MANA CaKE", 10, 5));
            expect(get_class($itemInstance))->toBe(ConjuredItem::class);
        });
    });
});
